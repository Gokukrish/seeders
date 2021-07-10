<?php

namespace App\Http\Controllers;

use App\Form3;
use Illuminate\Http\Request;

class Form3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date=$request->get('month');
        
        $fertilizers=Form3::where('Date',$date)->get();

        return view('form3.index', compact('fertilizers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form3.create');
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
            'Insecticide'=>'required',
            'CIB_Reg_NO'=>'required',
            'date_of_receipt'=>'required',
            'Manufacturer_name'=>'required',
            'Suplier_name'=>'required',
            'Batch_no'=>'required',
            'Date_of_Manufacturer'=>'required',
            'Date_of_expiry'=>'required',
            'Invoice_detail'=>'required',
            'Quantity'=>'required',
            'Previous_balance'=>'required',
            'Reciept_for_Month'=>'required',
            'Distributed_Month'=>'required',
            'Balance'=>'required',
            'Bill_No'=>'required',
            'Remarks'=>'required',
            ]);
        Form3::create($request->all());
        return back()->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form3  $form3
     * @return \Illuminate\Http\Response
     */
    public function show(Form3 $form3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form3  $form3
     * @return \Illuminate\Http\Response
     */
    public function edit(Form3 $form3)
    {
        return view('form3.edit',compact('form3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form3  $form3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form3 $form3)
    {
        $request->validate([
            'Date'=>'required',
            'Insecticide'=>'required',
            'CIB_Reg_NO'=>'required',
            'date_of_receipt'=>'required',
            'Manufacturer_name'=>'required',
            'Suplier_name'=>'required',
            'Batch_no'=>'required',
            'Date_of_Manufacturer'=>'required',
            'Date_of_expiry'=>'required',
            'Invoice_detail'=>'required',
            'Quantity'=>'required',
            'Previous_balance'=>'required',
            'Reciept_for_Month'=>'required',
            'Distributed_Month'=>'required',
            'Balance'=>'required',
            'Bill_No'=>'required',
            'Remarks'=>'required',
            ]);
            $form3->update($request->all());
            return back()->with('success', 'Created Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form3  $form3
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form3=Form3::find($id); 
        $form3->delete();
        return redirect()->route('form3.index')->with('success', 'Product deleted successfully');
            
        
    }
}
