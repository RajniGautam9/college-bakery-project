<?php

namespace App\Http\Controllers;

use App\delivery;
use Illuminate\Http\Request;
use App\customer;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD:app/Http/Controllers/DeliveryController.php
        $delivery = delivery::all();
        return view('Delivery_System.view_delivery', compact('delivery'));
=======
       $customer = customer::all();
       return view('customer.view_customer',compact('customer'));
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:app/Http/Controllers/CustomerController.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD:app/Http/Controllers/DeliveryController.php
        return view('Delivery_System.add_delivery');
=======
        return view('customer.add_customer');
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:app/Http/Controllers/CustomerController.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD:app/Http/Controllers/DeliveryController.php
        $request ->validate([
            'name' => 'required',
        ]);
        
        $delivery=delivery::create($request->all());
        return redirect()->back();
=======
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
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:app/Http/Controllers/CustomerController.php
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD:app/Http/Controllers/DeliveryController.php
        $delivery = delivery::find($id);
        return view('Delivery_System.edit_delivery', compact('delivery'));
=======
       $customer = customer::find($id);
        return view('customer.edit_customer',compact('customer'));
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:app/Http/Controllers/CustomerController.php
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD:app/Http/Controllers/DeliveryController.php
        $delivery = delivery::find($id);
        $delivery->update($request->all());
                 
        return redirect()->route('delivery.index')
                 ->with('success',' delivery updated successfully');
=======
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
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:app/Http/Controllers/CustomerController.php
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD:app/Http/Controllers/DeliveryController.php
        $delivery =delivery::find($id);
        $delivery->delete();

        return redirect()->route('delivery.index'); 
=======
        $customer = customer::find($id);

        $customer->delete();
 
        return redirect()->route('customer.index');
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:app/Http/Controllers/CustomerController.php
    }
}
