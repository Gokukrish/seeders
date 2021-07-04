<?php

namespace App\Http\Controllers;

use App\Form2;
use Illuminate\Http\Request;


class Form2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date=$request->get('month');
        
        $fertilizers=Form2::where('Date',$date)->get();

        return view('form2.index',compact('fertilizers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form2.create');
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
            'Date'=>'required', 
            'Retailer_name'=>'required',
            'Product_Name'=>'required',
            'Invoice'=>'required',
            'Invoice_Date'=>'required', 
            'Quantity_supplied'=>'required',
            'company'=>'required'
            ]);
            Form2::create($request->all());
            return back()->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form2  $form2
     * @return \Illuminate\Http\Response
     */
    public function show(Form2 $form2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form2  $form2
     * @return \Illuminate\Http\Response
     */
    public function edit(Form2 $form2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form2  $form2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form2 $form2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form2  $form2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form2 $form2)
    {
        //
    }
}
