@extends('main.app')
@section('content')
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
    <br>
    <h3 class="font-weight-bold">PESTICIDES AVAILABILITY MONITORING INFORMATION SYSTEM </h3>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
    <br>
    <div class="card font-weight-bold">
        <div class="card-header">
            PESTICIDES AO REGISTRATION
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
            <form action="{{ route('pesticides.update', $pesticidesAo->id)}} " method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Individual_Name">Enter the Individual Name</label>
                        <input type="text" name="Individual_Name" value="{{$pesticidesAo->Individual_Name}}"
                            class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Firm_Name">Enter the Firm Name</label>
                        <input type="text" name="Firm_Name" value="{{$pesticidesAo->Firm_Name}}" class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Address">Enter the Address</label>
                        <input type="text" name="Address" value="{{$pesticidesAo->Address}}" class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Contact_Person">Enter the Contact Person</label>
                        <input type="text" name="Contact_Person" value="{{$pesticidesAo->Contact_Person}}"
                            class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Register_Mobile_No">Enter the Register Mobile No</label>
                        <input type="text" name="Register_Mobile_No" value="{{$pesticidesAo->Register_Mobile_No}}"
                            class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Licesence_No">Enter the Licesence No</label>
                        <input type="text" name="Licesence_No" value="{{$pesticidesAo->Licesence_No}}" class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Date_of_expiry_Licence">Enter the Date of expiry Licence</label>
                        <input type="text" name="Date_of_expiry_Licence" value="{{$pesticidesAo->Date_of_expiry_Licence}}"
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
