@extends('main.app')
@section('content')
    <br>
    <div class="row text-center">
        <h3 class="font-weight-bold">MONTHLY RETURNS OF FORMULATED INSECTICIDES (MANUFACTURED/IMPORTED)</h3>
    </div>
    <br>
    <div class="font-weight-bold">
        <form class="form-inline" action="form5" method="post">
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
    <table class="table table-striped text-center font-weight-bold table-responsive" style="white-space: nowrap;">
        <thead>
            <tr>
                <th>Month&nbsp;&nbsp;&nbsp;</th>
                <th>Insecticide</th>
                <th>Type of Insecticide</th>
                <th>Batch No.</th>
                <th>Date of expiry</th>
                <th>Total quantity of technical grade </th>
                <th>Total formulated/ Imported Quantity </th>

            </tr>
        </thead>
        
        <tbody>

            @foreach ($fertilizers as $fertilizer)
           <tr>
            <td>{{$fertilizer->Period}}</td>
            <td>{{$fertilizer->Insecticide_Name}}</td>
            <td>{{$fertilizer->Type_Of_Insecticede}}</td>
            <td>{{$fertilizer->Batch_No}}</td>
            <td>{{$fertilizer->Date_of_expiry}}</td>
            <td>{{$fertilizer->Total_quantity}}</td>
            <td>{{$fertilizer->Total_formulated}}</td>
           </tr>
               
            @endforeach
        </tbody>
    </table>
@endsection
