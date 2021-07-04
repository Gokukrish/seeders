@extends('main.app')
@section('content')
    <br>
    <h3 class="font-weight-bold">FERTILIZER AVAILABILITY MONITORING INFORMATION SYSTEM </h3>
    <br>
    <div class="card font-weight-bold">
        <div class="card-header">
            FERTILIZER AO REGISTRATION
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
            <form action="{{ route('fertilizerAo.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Individual_Name">Enter the Individual Name</label>
                        <input type="text" name="Individual_Name" placeholder="Enter the  Individual Name"
                            class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Firm_Name">Enter the Firm Name</label>
                        <input type="text" name="Firm_Name" placeholder="Enter the Firm Name" class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Address">Enter the Address</label>
                        <input type="text" name="Address" placeholder="Enter the Address" class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Contact_Person">Enter the Contact Person</label>
                        <input type="text" name="Contact_Person" placeholder="Enter the Contact Person"
                            class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Register_Mobile_No">Enter the Register Mobile No</label>
                        <input type="text" name="Register_Mobile_No" placeholder="Enter the Register Mobile No"
                            class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Licesence_No">Enter the Licesence No</label>
                        <input type="text" name="Licesence_No" placeholder="Enter the Licesence No" class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Date_of_expiry_Licence">Enter the Date of expiry Licence</label>
                        <input type="date" name="Date_of_expiry_Licence" placeholder="Enter the Date of expiry Licence"
                            class="form-control" />
                    </div>
                </div>
                <div class="p-3 mb-4">
                    <div class="text-center">
                        <button type="submit" name="add" id="add" class="btn btn-success ">Add</button>
                    </div>
                </div>

            </form>


        </div>
    @endsection
