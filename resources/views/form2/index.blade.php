@extends('main.app')
@section('content')
    <br>
    <div class="row text-center">
        <h3 class="font-weight-bold">FERTILIZER AVAILABILITY MONITORING INFORMATION SYSTEM </h3>
    </div>
    <br>
    <div class="font-weight-bold">
        <form class="form-inline" action="form2" method="post">
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
    <table class="table table-striped text-center font-weight-bold">
        <thead>
            <tr>
                <th>Month&nbsp;&nbsp;&nbsp;</th>
                <th>Retailer Name</th>
                <th>Product Name</th>
                <th>Invoice Number</th>
                <th>Invoice Date</th>
                <th>Quantity Supplied</th>
                <th>Company</th>
            </tr>
        </thead>
        
        <tbody>

            @foreach ($fertilizers as $fertilizer)
           <tr>
            <td>{{$fertilizer->Date}}</td>
            <td>{{$fertilizer->Retailer_name}}</td>
            <td>{{$fertilizer->Product_Name}}</td>
            <td>{{$fertilizer->Invoice}}</td>
            <td>{{$fertilizer->Invoice_Date}}</td>
            <td>{{$fertilizer->Quantity_supplied}}</td>
            <td>{{$fertilizer->company}}</td>
           </tr>
               
            @endforeach
        </tbody>
    </table>
@endsection
