@extends('main.app')
@section('content')


    <br>
    <h3 class="font-weight-bold">FERTILIZER AVAILABILITY MONITORING INFORMATION SYSTEM </h3>
    <br>
    <div class="card font-weight-bold">
        <div class="card-header">
            DIGITAL PAYMENT FOR PURCHASE OF FERTILIZERS BY FARMERS
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
            <form action="{{ route('fertilizer.update', $fertilizer->id) }}" method="post">
                 @csrf
                @method('PUT')
                <div class="row">
                <div class="form-group col-md-6">
                <label for="Date">Enter the Date</label>
                <input type="month" name="Date" value="{{ $fertilizer->Date}}"  class="form-control"  />
                </div>
                
                <div class="form-group col-md-6">
                <label for="Product_Name">Enter the Product Name </label>
                <select type="text" name="Product_Name" value="{{ $fertilizer->Product_Name}}"  class="form-control" >
                    <option>Neem Coated Urea</option>
                    <option>SSP</option>
                    <option>MOP</option>
                    <option>DAP</option>
                    <option>Ammonium Chloride </option>
                    <option>Ammonium Sulphate </option>
                    <option>20-20-0-13</option>
                    <option>20:20:0:13</option>
                    <option>20:20:0</option>
                    <option>16:20:0:13</option>
                    <option>17:17:17</option>
                    <option>15:15:15</option>
                    <option>16:16:16</option>
                    <option>Organic Manures</option>
                    <option>City Compost</option>
                </select>
                </div>
                </div>
                
                
                <div class="row">
                <div class="form-group col-md-6">
                <label for="Opening_Stock">Enter the Opening Stock</label>
                <input type="text" name="Opening_Stock" value="{{ $fertilizer->Opening_Stock}}" class="form-control" value=""/>
                </div>
                
                <div class="form-group col-md-6">
                <label for="Closing_Stock">Enter the Closing Stock</label>
                <input type="text" name="Closing_Stock" value="{{ $fertilizer->Closing_Stock}}" class="form-control" />
                </div>
                </div>
                
                
                <div class="row">
                <div class="form-group col-md-6">
                <label for="Cash_Transaction">Enter the Quantity Sold through Cash Transaction</label>
                <input type="text" name="Cash_Transaction"  value="{{ $fertilizer->Cash_Transaction}}" class="form-control" />
                </div>
                
                <div class="form-group col-md-6">
                <label for="Cashless_Transaction">Enter  the Quantitiy sold Trough Cashless Transaction</label>
                <input type="text" name="Cashless_Transaction"  value="{{ $fertilizer->Cashless_Transaction}}" class="form-control" />
                </div>
                </div>
                
                
                <div class="row">
                <div class="form-group col-md-6">
                <label for="No_Of_Cash">Enter the No. of Cash Transaction</label>
                <input type="text" name="No_of_Cash"  value="{{ $fertilizer->No_of_Cash}}" class="form-control" />
                </div>
                
                <div class="form-group col-md-6">
                <label for="No_of_Cashless">Enter  the No. of  Cashless Transaction</label>
                <input type="text" name="No_of_Cashless"  value="{{ $fertilizer->No_of_Cashless}}" class="form-control" />
                </div>
                </div>
                
                <div class="p-3 mb-4">
                <div class="text-center">
                <button type="submit" name="add" id="add" class="btn btn-success " }}>Add</button>
                </div>
                </div>
                </form>
           {{-- --}} 
           
               {{--
                <form action="{{ route('fertilizer.store') }}" method="POST">
                 @csrf
                <tr>
                <td><input type="month" name="Date" placeholder="Enter the Date" class="form-control" /></td>  

                <td><input type="text" name="Product_Name" placeholder="Enter the Product Name " class="form-control" /></td>  

                <td><input type="text" name="Opening_Stock" placeholder="Enter the Opening Stock" class="form-control" /></td> 
                </tr>
                <tr>
                <td><input type="text" name="Closing_Stock" placeholder="Enter the Closing Stock" class="form-control" /></td> 
                <td><input type="text" name="Cash_Transaction" placeholder="Enter the Quantity Sold through Cash Transaction" class="form-control" /></td> 
                <td><input type="text" name="Cashless_Transaction" placeholder="Enter  the Quantitiy sold Trough Cashless Transaction" class="form-control" /></td> 
                </tr> 
                <tr>
                <td><input type="text" name="No_of_Cash" placeholder="Enter the No. of Cash Transaction" class="form-control" /></td> 
                <td><input type="text" name="No_of_Cashless" placeholder="Enter  the No. of  Cashless Transaction" class="form-control" /></td> 
                </tr>
                <td><button type="submit" name="add" id="add" class="btn btn-success">Add</button></td> 
                </form>
             ---}}
        </div>
    </div>


@endsection

