@extends('main.app')
@section('content')
    <br>
    <div class="row text-center">
        <h5 class="font-weight-bold">Fertilizer Ao</h5>
    </div>
    <br>
    <table class="table table-striped text-center font-weight-bold table-responsive" style="white-space: nowrap;">
        <thead>
            <tr>
               <th>Name</th>
               <th>Firm Name</th>
               <th>Address</th>
               <th>Contact Person</th>
               <th>Registered Mobile</th>
               <th>License</th>
               <th>Date Of Expiry</th>
                <th>Action</th>
            </tr>
        </thead>
        
        
        <tbody>

            @foreach ($users as $user)
           <tr>
                <td>{{$user->Individual_Name}}</td>
                <td>{{$user->Firm_Name}}</td>
                <td>{{$user->Address}}</td>
                <td>{{$user->Contact_Person}}</td>
                <td>{{$user->Register_Mobile_No}}</td>
                <td>{{$user->Licesence_No}}</td>
                <td>{{$user->Date_of_expiry_Licence}}</td>
                <td>
                    <div class="row">
                        <a style="color:white;" href="fertilizerAo\{{$user->id}}\edit"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>
                        &nbsp;
                        <form action="{{route('fertilizerAo.destroy', $user->id)}}" method="post">
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            @method('delete')
                            @csrf
                        </form>
                    </div>
                </td>
           </tr>
               
            @endforeach
        </tbody>
    </table>
@endsection
