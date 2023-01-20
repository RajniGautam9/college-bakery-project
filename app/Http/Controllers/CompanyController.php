<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = company::all();
       return view('company_profile.view_company',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company_profile.add_company');
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
       $company = company::create($request->all());
       $company->image = $imagename;
       $company->save();

        return redirect()->route('company.index');
        return back()->with('success','company upload successfully!');
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
        $company = company::find($id);
        return view('company_profile.edit_company',compact('company'));
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
        $company = company::find($id);
        $imagename = Time().'.'.$request->file('image')->getClientOriginalExtension();
        move_uploaded_file($request->image,'backend/image/'.$imagename);
       
       $company->image = $imagename;
       $company->name = $request->get('name');
       $company->email = $request->get('email');
       $company->phone = $request->get('phone');
       $company->address = $request->get('address');
       $company->website = $request->get('website');
       $company->details = $request->get('details');
       $company->save();
 
 
        return redirect()->route('company.index')
                         ->with('success','company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = company::find($id);

        $company->delete();
 
        return redirect()->route('company.index');
    }
}
