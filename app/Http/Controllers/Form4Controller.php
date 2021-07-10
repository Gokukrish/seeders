<?php

namespace App\Http\Controllers;

use App\Form4;
use Illuminate\Http\Request;

class Form4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date=$request->get('month');
        
        $fertilizers=Form4::where('period',$date)->get();

        return view('form4.index', compact('fertilizers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form4.create');
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
            'period'=>'required',
            'Insecticide_name'=>'required',
            'Type_of_Insecticide'=>'required',
            'Batch_no'=>'required',
            'Date_Of_expiry'=>'required',
            'Total_quantity'=>'required',
            'Quantity_utilized'=>'required',
            'Quantity_sold'=>'required',
            ]);
        Form4::create($request->all());
        return back()->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form4  $form4
     * @return \Illuminate\Http\Response
     */
    public function show(Form4 $form4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form4  $form4
     * @return \Illuminate\Http\Response
     */
    public function edit(Form4 $form4)
    {
        return view('form4.edit', compact('form4'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form4  $form4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form4 $form4)
    {
        $request->validate([
            'period'=>'required',
            'Insecticide_name'=>'required',
            'Type_of_Insecticide'=>'required',
            'Batch_no'=>'required',
            'Date_Of_expiry'=>'required',
            'Total_quantity'=>'required',
            'Quantity_utilized'=>'required',
            'Quantity_sold'=>'required',
            ]);
            $form4->update($request->all());
            return back()->with('success', 'Created Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form4  $form4
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form4=Form4::find($id); 
        //return $pesticidesAo;
        $form4->delete();
        return redirect()->route('form4.index')
            ->with('success', 'Product deleted successfully');
    }
}
