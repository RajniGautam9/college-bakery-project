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
<<<<<<< HEAD

        $delivery = delivery::all();
        return view('Delivery_System.view_delivery', compact('delivery'));

     
=======
       $delivery = delivery::all();
       return view('Delivery_System.view_delivery',compact('delivery'));
>>>>>>> a2b5a096b2ccb56be4d86d21a17286c4ad8ce488
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
}