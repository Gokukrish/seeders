<?php

namespace App\Http\Controllers;

use App\PesticidesAo;
use Illuminate\Http\Request;

class PesticidesAoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=PesticidesAo::all();
        return view('pecticidesAo.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pecticidesAo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'Individual_Name'=>'required',
            'Firm_Name'=>'required',
            'Address'=>'required',
            'Contact_Person'=>'required',
            'Register_Mobile_No'=>'required',
            'Licesence_No'=>'required',
            'Date_of_expiry_Licence'=>'required',
            ]);

            PesticidesAo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PesticidesAo  $pesticidesAo
     * @return \Illuminate\Http\Response
     */
    public function show(PesticidesAo $pesticidesAo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PesticidesAo  $pesticidesAo
     * @return \Illuminate\Http\Response
     */
    public function edit(PesticidesAo $pesticidesAo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PesticidesAo  $pesticidesAo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PesticidesAo $pesticidesAo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PesticidesAo  $pesticidesAo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesticidesAo $pesticidesAo)
    {
        //
    }
}
