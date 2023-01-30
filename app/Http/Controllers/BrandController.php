<?php

namespace App\Http\Controllers;

use App\brand;
use App\category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = brand::all();
       return view('brand.view_brand',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        return view('brand.add_brand',compact('category'));
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
       $brand = brand::create($request->all());
       $brand->image = $imagename;
      
       $brand->save();

       return redirect()->route('brands.index');
       return back()->with('success','brand upload successfully!');
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
    public function edit($id)
    {
        $brand = brand::find($id);
        $category = category::all();
        return view('brand.edit_brand',compact('brand','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $brand = brand::find($id);
        $imagename = Time().'.'.$request->file('image')->getClientOriginalExtension();
        move_uploaded_file($request->image,'backend/image/'.$imagename);
       
       $brand->image = $imagename;
       $brand->name = $request->get('name');
       $brand->category_id = $request->get('category_id');
       $brand->save();
 
 
        return redirect()->route('brands.index')
                         ->with('success','brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = brand::find($id);

        $brand->delete();
 
        return redirect()->route('brands.index');
    }



    public function onStatus(Request $request, $id)
    {
        $status = brand::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('brands.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = brand::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('brands.index')
            ->with('success','Status DeActive successfully.');
    }
}



