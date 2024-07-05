<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon; //added
use App\Rules\DateBetween; //added
use App\Rules\TimeBetween; //added
use App\Models\Reservation; //added
use App\Models\Table; //added
use App\Enums\TableStatus; //added
use App\Models\Menu;



class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        $reservation = $request->session()->get('reservation');
        return  view('frontend.reservations.step-one',compact('reservation','min_date','max_date'));
    }

    public function storeStepOne(Request $request)
    {
         $validated = $request->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required','email'],
            'res_date'=>['required','date', new DateBetween, new TimeBetween],
            'tel_number'=>['required'],
            'guest_number'=>['required']
         ]);

         if(empty($request->session()->get('reservation')))
         {
             $reservation = new Reservation();
             $reservation->fill($validated);
             $request->session()->put('reservation',$reservation);
         }
         else
         {
             $reservation = $request->session()->get('reservation');
             $reservation->fill($validated);
             $request->session()->put('reservation',$reservation);
         }
        return redirect(route('reservations.step.two'));
    }


    public function stepTwo(Request $request)
{
    $reservation = $request->session()->get('reservation');
    $res_table_id = [];

    foreach(Reservation::all() as $reservation_db) {
        if(Carbon::parse($reservation_db->res_date)->format('Y-m-d') == Carbon::parse($reservation->res_date)->format('Y-m-d')) {
            $res_table_id[] = $reservation_db->table_id;
        }
    }

    $tables = Table::where('status', TableStatus::Available)
        ->where('guest_number', '>=', $reservation->guest_number)
        ->whereNotIn('id', $res_table_id)
        ->get();

    // Retrieve the menus from the database
    $menus = Menu::all(); // Adjust this according to your menu retrieval logic

    return view('frontend.reservations.step-two', compact('reservation', 'tables', 'menus'));
}



    public function storeStepTwo(Request $request)
    {
         $validated = $request->validate([
            'table_id'=>['required'],
         ]);

        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);
        $reservation->save();

        $request->session()->forget('reservation');

        return redirect(route('thankyou'));
        // return redirect(route('reservations.step.two'));
    }

}
