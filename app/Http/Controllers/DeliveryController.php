<?php

namespace App\Http\Controllers;

use App\delivery;
use Illuminate\Http\Request;


class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $delivery = delivery::all();
        return view('Delivery_System.view_delivery', compact('delivery'));

     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Delivery_System.add_delivery');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request ->validate([
        'name' => 'required',
    ]);
        
        $delivery=delivery::create($request->all());
        return redirect()->back();


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
 
        $delivery = delivery::find($id);
        return view('Delivery_System.edit_delivery', compact('delivery'));
 
      
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
        $delivery = delivery::find($id);
        $delivery->update($request->all());
                 
        return redirect()->route('delivery.index')
                 ->with('success',' delivery updated successfully');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $delivery =delivery::find($id);
        $delivery->delete();

        return redirect()->route('delivery.index');
     
    
}

public function onStatus(Request $request, $id)
{
    $status = delivery::find($id);
    $status-> status = 'on';
    $status->save();
    return redirect()->route('delivery.index')
        ->with('success','Status Active successfully.');
}

public function offStatus(Request $request, $id)
{
    $status = delivery::find($id);
    $status-> status = 'off';
    $status->save();
    return redirect()->route('delivery.index')
        ->with('success','Status DeActive successfully.');
}
}