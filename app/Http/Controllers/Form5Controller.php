<?php

namespace App\Http\Controllers;

use App\Form5;
use Illuminate\Http\Request;

class Form5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date=$request->get('month');
        
        $fertilizers=Form5::where('period',$date)->get();

        return view('form5.index', compact('fertilizers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form5.create');
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
            'Period'=>'required',
            'Insecticide_Name'=>'required',
            'Type_Of_Insecticede'=>'required',
            'Batch_No'=>'required',
            'Date_of_expiry'=>'required',
            'Total_formulated'=>'required',
            'Total_quantity'=>'required',
            ]);
        Form5::create($request->all());
        return back()->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form5  $form5
     * @return \Illuminate\Http\Response
     */
    public function show(Form5 $form5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form5  $form5
     * @return \Illuminate\Http\Response
     */
    public function edit(Form5 $form5)
    {
        return view('form5.edit',compact('form5'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form5  $form5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form5 $form5)
    {
        $request->validate([
            'Period'=>'required',
            'Insecticide_Name'=>'required',
            'Type_Of_Insecticede'=>'required',
            'Batch_No'=>'required',
            'Date_of_expiry'=>'required',
            'Total_formulated'=>'required',
            'Total_quantity'=>'required',
            ]);
            $form5->update($request->all());
            return back()->with('success', 'Created Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form5  $form5
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form5=Form5::find($id); 
        //return $pesticidesAo;
        $form5->delete();
        return redirect()->route('form5.index')
            ->with('success', 'Product deleted successfully');
    }
}
