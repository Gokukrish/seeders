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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form5  $form5
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form5 $form5)
    {
        //
    }
}
