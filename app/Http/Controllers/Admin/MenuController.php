<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu; //added
use App\Models\Category;  //added
use App\Http\Requests\MenuStoreRequest; //added
use File;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $menus = Menu::query();
    $categories = Category::all();

    if ($request->filled('category')) {
        $category = Category::findOrFail($request->category);
        $menus->where('category_id', $category->id);
    }

    $menus = $menus->get();

    return view('admin.menus.index', compact('menus', 'categories'));
}




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('admin.menus.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuStoreRequest $request)
    {
        $request->validated();
        $image = time().'-'.$request->name.'.'.$request->image->guessClientExtension();
        $request->image->move(public_path('images/menus'),$image);

        $menu = Menu::create([
        'name'=>$request->name,
        'price'=>$request->price,
        'image'=>$image,
        'description'=>$request->description
        ]);

        if($request->has('categories'))
        {
           $menu->category()->attach($request->categories); //if this dosent work use  $menu->categories()->attach($request->categories)
        }
        return redirect(route('admin.menus.index'))->with('success','Menu created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('admin.menus.edit',compact('menu','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);

        $image = $menu->image;
        if($request->hasFile('image'))
        {
            if(File::exists(public_path('images/menus/'.$image)))
            {
                if(File::delete(public_path('images/menus/'.$image)))
                {
                    $image = time().'-'.$request->name.'.'.$request->image->guessClientExtension();
                    $request->image->move(public_path('images/menus'),$image);
                }

            }
        }
        $menu->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'image'=>$image,
            'description'=>$request->description
        ]);
        if($request->has('categories'))
        {
          $menu->category()->sync($request->categories);
        }
        return redirect(route('admin.menus.index'))->with('success','Menu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if(File::exists(public_path('images/menus/'.$menu->image)))
            {
                if(File::delete(public_path('images/menus/'.$menu->image)))
                {
                    $menu->delete();
                 }
             }
        return redirect(route('admin.menus.index'))->with('danger','Menu deleted successfully');;
    }
}
