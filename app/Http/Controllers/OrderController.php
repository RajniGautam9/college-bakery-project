<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\customer;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = order::all();
        return view('order.view_order',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = customer::all();
        return view('order.add_order',compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
        order::create($request->all());
        return redirect()->back();
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
        $order = order::find($id);
        $customer = customer::all();
        return view('order.edit_order',compact('order','customer'));
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
       
        $order = order::find($id);
        $order->update($request->all());

        $order->customer_id = $request->get('customer_id');
        $order->order = $request->get('order');
        $order->amount = $request->get('amount');
        $order->discount = $request->get('discount');
        $order->tamount = $request->get('tamount');
        $order->payment = $request->get('payment');
        $order->message = $request->get('message');
        $order->status = $request->get('status');
  
  
         return redirect()->route('order.index')
                          ->with('success','order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::find($id);

        $order->delete();
 
        return redirect()->route('order.index');
    }
}
