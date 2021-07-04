@extends('main.app')
@section('content')
    <br>
    <div class="row text-center">
        <h3 class="font-weight-bold">MONTHLY RETURNS OF TECHNICAL GRADE INSECTICIDES/PESTICIDES (MANUFACTURED/IMPORTED)</h3>
    </div>
    <br>
    <div class="font-weight-bold">
        <form class="form-inline" action="form4" method="post">
            @method('get')
            @csrf
                <div class="form-group">
                    <label for="month">Select Month</label>
                    &nbsp;&nbsp;
                    <input type="month" name="month" id="" class= "form-control">
                </div>
                &nbsp;
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
   <br>
    <table class="table table-striped text-center font-weight-bold" style="">
        <thead>
            <tr>
                <th>Month&nbsp;&nbsp;&nbsp;</th>
                <th>Insecticide</th>
                <th>Type of Insecticide</th>
                <th>Batch no.</th>
                <th>Date Of Expiry</th>
                <th>Total Quantity Imported/ Manufactured</th>
                <th>Utilized for formulations </th>
                <th>Quantity Sold</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($fertilizers as $fertilizer)
           <tr>
            <td>{{$fertilizer->period}}</td>
            <td>{{$fertilizer->Insecticide_name}}</td>
            <td>{{$fertilizer->Type_of_Insecticide}}</td>
            <td>{{$fertilizer->Batch_no}}</td>
            <td>{{$fertilizer->Date_Of_expiry}}</td>
            <td>{{$fertilizer->Total_quantity}}</td>
            <td>{{$fertilizer->Quantity_utilized}}</td>
            <td>{{$fertilizer->Quantity_sold}}</td>
           </tr>
               
            @endforeach
        </tbody>
    </table>
@endsection
