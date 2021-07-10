@extends('main.app')
@section('content')
<br>
<h3 class="font-weight-bold">Monthly Return relating to the Seed business by Seed Dealer</h3>
<br>
<div class="card font-weight-bold">
    <div class="card-header font-weight-bold">
            
        Monthly Return relating to the Seed business by Seed Dealer

    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('seed.update',$seed->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="form-group col-md-6">
            <label for="Month_Year">Enter the Month Year</label>
            <input type="month" name="Month_Year" placeholder=" " value="{{$seed->Month_Year}}" class="form-control" />
            </div>
            
            <div class="form-group col-md-6">
            <label for="Name">Enter the Name</label>
            <input type="text" name="Name" placeholder=" " value="{{$seed->Name  }}" class="form-control" />
            </div>
            </div>
            
            
            <div class="row">
            <div class="form-group col-md-6">
            <label for="Crop">Enter the Crop</label>
            <input type="text" name="Crop" placeholder=" " value="{{ $seed->Crop}}" class="form-control" />
            </div>
            
            <div class="form-group col-md-6">
            <label for="Class_of _Seed">Enter the Class of  Seed</label>
            <input type="text" name="Class_of_Seed" placeholder=" " value="{{$seed->Class_of_Seed }}" class="form-control" />
            </div>
            </div>
            
            
            <div class="row">
            <div class="form-group col-md-6">
            <label for="Opening_Stock">Enter the Opening Stock</label>
            <input type="text" name="Opening_Stock" placeholder=" " value="{{$seed->Opening_Stock}}" class="form-control" />
            </div>
            
            <div class="form-group col-md-6">
            <label for="Quantity_Purchased">Enter the Quantity Purchased</label>
            <input type="text" name="Quantity_Purchased" placeholder=" " value="{{ $seed->Quantity_Purchased}}" class="form-control" />
            </div>
            </div>
            
            
            <div class="row">
            <div class="form-group col-md-6">
            <label for="Total_quantity_imported">Enter the Total quantity imported</label>
            <input type="text" name="Total_quantity_imported" placeholder=" " value="{{ $seed->Total_quantity_imported }}" class="form-control" />
            </div>
            
            <div class="form-group col-md-6">
            <label for="Total">Enter the Total</label>
            <input type="text" name="Total" placeholder=" " value="{{$seed->Total }}" class="form-control" />
            </div>
            </div>
            
            
            <div class="row">
            <div class="form-group col-md-6">
            <label for="Total_quantity_sold">Enter the Total quantity sold</label>
            <input type="text" name="Total_quantity_sold" placeholder=" " value="{{ $seed->Total_quantity_sold }}" class="form-control" />
            </div>
            
            <div class="form-group col-md-6">
            <label for="Total_quanttity_exported">Enter the Total quanttity exported</label>
            <input type="text" name="Total_quanttity_exported" placeholder=" " value="{{ $seed->Total_quanttity_exported }}" class="form-control" />
            </div>
            </div>
            
            
            <div class="row">
            <div class="form-group col-md-6">
            <label for="Closing_stock">Enter the Closing stock</label>
            <input type="text" name="Closing_stock" placeholder=" " value="{{ $seed->Closing_stock }}" class="form-control" />
            </div>
            <div class="p-3 mb-4">
            <div class="text-center">
            <button type="submit" name="add" id="add" class="btn btn-success ">Add</button>
            </div>
            </div>
            </form>
    </div>

</div>

@endsection