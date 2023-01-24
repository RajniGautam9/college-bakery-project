<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = category::all();
        return view('category.view_category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagename = Time().'.'.$request->file('image')->getClientOriginalExtension();
        move_uploaded_file($request->image,'backend/image/'.$imagename);

        $request->validate([
            'name' => 'required',

        ]);
       
        $category = category::create($request->all());
        
        
      $category->image = $imagename;
     
      $category->save();

        return redirect()->route('category.index');
        return back()->with('success','category upload successfully!');
    
        
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::find($id);
        return view('category.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category =category::find($id);
        $category->update($request->all());
        $imagename = Time().'.'.$request->file('image')->getClientOriginalExtension();
        move_uploaded_file($request->image,'backend/image/'.$imagename);

        
      $category->image = $imagename;
     
<<<<<<< HEAD
        $category->name = $request->get('name');
        $category->item = $request->get('item');
        $category->status = $request->get('status');
=======
        $category-> image = $imagename;
        $category->name = $request->get('name');
        $category->item = $request->get('item');
        $category->status= $request->get('status');

       
>>>>>>> a2b5a096b2ccb56be4d86d21a17286c4ad8ce488
        $category->save();
        return redirect()->route('category.index')
                        ->with('success','category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =category::find($id);
        $category->delete();

        return redirect()->route('category.index'); 
    }
}
