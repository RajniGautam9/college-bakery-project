<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $customer = customer::all();
       return view('customer.view_customer',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.add_customer');
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
       $customer = customer::create($request->all());
       $customer->image = $imagename;
       $customer->save();

        return redirect()->route('customer.index');
        return back()->with('success','customer upload successfully!');
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
       $customer = customer::find($id);
        return view('customer.edit_customer',compact('customer'));
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
         $customer = customer::find($id);
         $imagename = Time().'.'.$request->file('image')->getClientOriginalExtension();
          move_uploaded_file($request->image,'backend/image/'.$imagename);
         
         $customer->image = $imagename;
         $customer->name = $request->get('name');
         $customer->phone = $request->get('phone');
         $customer->address = $request->get('address');
         $customer->gender = $request->get('gender');
         $customer->email = $request->get('email');
         $customer->status = $request->get('status');
         $customer->save();
   
   
          return redirect()->route('customer.index')
                           ->with('success','customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = customer::find($id);

        $customer->delete();
 
        return redirect()->route('customer.index');
    }
}
