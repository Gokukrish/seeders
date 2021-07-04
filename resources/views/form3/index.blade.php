@extends('main.app')
@section('content')
    <br>
    <div class="row text-center">
        <h3 class="font-weight-bold">INSECTICIDES/PESTICIDES AVAILABILITY MONITORING INFORMATION SYSTEM</h3>
    </div>
    <br>
    <div class="font-weight-bold">
        <form class="form-inline" action="form3" method="post">
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
    <table class="table table-striped table-responsive text-center font-weight-bold" style="white-space: nowrap;">
        <thead>
            <tr>
                <th>Month&nbsp;&nbsp;&nbsp;</th>
                <th>Insecticide</th>
                <th>CIR reg. no.</th>
                <th>CIR Reg Year</th>
                <th>Manufacturer</th>
                <th>Supplier/Distributor</th>
                <th>Batch No.</th>
                <th>Date of Manufacture</th>
                <th>Date of expiry</th>
                <th>Invoice details</th>
                <th>Quantity</th>
                <th>Previous balance</th>
                <th>Receipt for the month</th>
                <th>Distributed for the month</th>
                <th>Balance</th>
                <th>Bill No.</th>
                <th>Remarks</th>
            </tr>
        </thead>
        
        <tbody>

            @foreach ($fertilizers as $fertilizer)
           <tr>
            <td>{{$fertilizer->Date}}</td>
            <td>{{$fertilizer->Insecticide}}</td>
            <td>{{$fertilizer->CIB_Reg_NO}}</td>
            <td>{{$fertilizer->date_of_receipt}}</td>
            <td>{{$fertilizer->Manufacturer_name}}</td>
            <td>{{$fertilizer->Suplier_name}}</td>
            <td>{{$fertilizer->Batch_no}}</td>
            <td>{{$fertilizer->Date_of_Manufacturer}}</td>
            <td>{{$fertilizer->Date_of_expiry}}</td>
            <td>{{$fertilizer->Invoice_detail}}</td>
            <td>{{$fertilizer->Quantity}}</td>
            <td>{{$fertilizer->Previous_balance}}</td>
            <td>{{$fertilizer->Reciept_for_Month}}</td>
            <td>{{$fertilizer->Distributed_Month}}</td>
            <td>{{$fertilizer->Balance}}</td>
            <td>{{$fertilizer->Bill_No}}</td>
            <td>{{$fertilizer->Remarks}}</td>
           </tr>
               
            @endforeach
        </tbody>
    </table>
@endsection
