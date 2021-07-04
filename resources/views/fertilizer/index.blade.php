@extends('main.app')
@section('content')
    <br>
    <div class="row text-center">
        <h3 class="font-weight-bold">FERTILIZER AVAILABILITY MONITORING INFORMATION SYSTEM </h3>
    </div>
    <br>
    <div class="font-weight-bold">
        <form class="form-inline" action="fertilizer" method="post">
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
                <th>Product Name</th>
                <th>Opening Stock</th>
                <th>Closing Stock</th>
                <th>Qt sold in Cash Transaction</th>
                <th>Qt sold in Cashless Transaction</th>
                <th>No. of Cash Transaction</th>
                <th>No. of Cashless Transaction</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fertilizers as $fertilizer)
                <tr>

                    <td>{{ $fertilizer->Date }}</td>
                    <td>{{ $fertilizer->Product_Name }}</td>
                    <td>{{ $fertilizer->Opening_Stock }}</td>
                    <td>{{ $fertilizer->Closing_Stock }}</td>
                    <td>{{ $fertilizer->Cash_Transaction }}</td>
                    <td>{{ $fertilizer->Cashless_Transaction }}</td>
                    <td>{{ $fertilizer->No_of_Cash }}</td>
                    <td>{{ $fertilizer->No_of_Cashless }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
