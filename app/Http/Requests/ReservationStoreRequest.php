<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;


class ReservationStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    // app/Http/Requests/StoreReservationRequest.php
public function rules()
{
    return [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'res_date' => 'required|date',
        'tel_number' => 'required|string|max:20',
        'table_id' => 'required|integer|exists:tables,id',
        'guest_number' => 'required|integer|min:1',
        'menu_id' => 'required|integer|exists:menus,id', // Ensure this line is present
    ];
}

}
