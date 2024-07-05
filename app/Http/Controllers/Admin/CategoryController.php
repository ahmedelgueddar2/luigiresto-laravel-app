<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest; //added
use App\Models\Category; //added
use File; //added

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $request->validated();
        $image = time().'-'.$request->name.'.'.$request->image->guessClientExtension();
        $request->image->move(public_path('images/categories'),$image);
        Category::create([
        'name'=>$request->name,
        'image'=>$image,
        'description'=>$request->description
    ]);
    return redirect(route('admin.categories.index'))->with('success','category created sucessfully');
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
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $image = $category->image;
        if($request->hasFile('image'))
        {
            if(File::exists(public_path('images/categories/'.$image)))
            {
                if(File::delete(public_path('images/categories/'.$image)))
                {       
                    $image = time().'-'.$request->name.'.'.$request->image->guessClientExtension();
                    $request->image->move(public_path('images/categories'),$image);
                }   
                
            }           
        }
        $category->update([
            'name'=>$request->name,
            'image'=>$image,
            'description'=>$request->description
        ]);
        return redirect(route('admin.categories.index'))->with('success','Category updated sucessfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(File::exists(public_path('images/categories/'.$category->image)))
            {
                if(File::delete(public_path('images/categories/'.$category->image)))
                {
                     $category->delete();
                }   
             }  
        return redirect(route('admin.categories.index'))->with('danger','Category deleted sucessfully');;
    }

}
