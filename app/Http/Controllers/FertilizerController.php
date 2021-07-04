<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fertiliser;

class FertilizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $date=$request->get('month');
        
        $fertilizers=Fertiliser::where('Date',$date)->get();

        return view('fertilizer.index',compact('fertilizers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('fertilizer.create');
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
            'Product_Name'=>'required',
            'Opening_Stock'=>'required',
            'Closing_Stock'=>'required',
            'Cash_Transaction'=>'required',
            'Cashless_Transaction'=>'required',
            'No_of_Cash'=>'required',
            'No_of_Cashless'=>'required'
        ]);

        
             Fertiliser::create($request->all());
            
    

        return back()->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fertilizer $fertilizer)
    {
      return view('fertilizer.show',compact('fertilizer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fertilizer $fertilizer)
    {
        $request->validate([
            'Date'=>'required',
            'Product_Name'=>'required',
            'Opening_Stock'=>'required',
            'Closing_Stock'=>'required',
            'Cash_Transaction'=>'required',
            'Cashless_Transaction'=>'required',
            'No_of_Cash'=>'required',
            'No_of_Cashless'=>'required'
        ]);

        $fertilizer->update($request->all());

        return redirect()->route('fertilizer.index')
                        ->with('success','Product updated successfully');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fertilizer $fertilizer )
    {
        $fertilizer->delete();
  
        return redirect()->route('fertilizer.index')
                        ->with('success','Product deleted successfully');
    }
}
