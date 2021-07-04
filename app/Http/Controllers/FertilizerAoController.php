<?php

namespace App\Http\Controllers;

use App\FertilizerAo;
use Illuminate\Http\Request;

class FertilizerAoController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=FertilizerAo::all();
        return view('fertilizerAo.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fertilizerAo.create');
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
            'Individual_Name'=>'required',
            'Firm_Name'=>'required',
            'Address'=>'required',
            'Contact_Person'=>'required',
            'Register_Mobile_No'=>'required',
            'Licesence_No'=>'required',
            'Date_of_expiry_Licence'=>'required',
            ]);
            FertilizerAo::create($request->all());
            return back()->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FertilizerAo  $fertilizerAo
     * @return \Illuminate\Http\Response
     */
    public function show(FertilizerAo $fertilizerAo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FertilizerAo  $fertilizerAo
     * @return \Illuminate\Http\Response
     */
    public function edit(FertilizerAo $fertilizerAo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FertilizerAo  $fertilizerAo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FertilizerAo $fertilizerAo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FertilizerAo  $fertilizerAo
     * @return \Illuminate\Http\Response
     */
    public function destroy(FertilizerAo $fertilizerAo)
    {
        //
    }
}
