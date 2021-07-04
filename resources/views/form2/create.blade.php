@extends('main.app')
@section('content')

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
    <br>
    <h3 class="font-weight-bold">FERTILIZER AVAILABILITY MONITORING INFORMATION SYSTEM </h3>
    <br>
    <div class="card font-weight-bold">
        <div class="card-header">
            SUPPLY OF FERTILIZERS TO RETAILERS
        </div>

        <div class="card-body">
            <form action="{{ route('form2.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Date">Report for the period </label>
                        <input type="month" name="Date" placeholder="Report for the period " class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Retailer_name">Name of the Retailer to Whom supplied</label>
                        <select type="text" name="Retailer_name" placeholder="Name of the Retailer to Whom supplied"
                            class="form-control">
                            <option>Vairakkanu Fertilizers, Karikalampakkam</option>
                            <option>Kathiravan Fertilizers, Seliamedu</option>
                            <option>Vairakkanu Agro Centre, Seliamedu</option>
                            <option>Manmadeu Fertilizers</option>
                            <option>Sara Narayana Agencies, Karayamputhur </option>
                            <option>Thillai Agro Centre, Madukarai</option>
                            <option>Sri Karpaga Vinayagar Traders, Madukarai</option>
                            <option>Sri Velmurugam Fertlizers, P.S. Nallur</option>
                            <option>Kumaran Agencies, P.S. Nallur</option>
                            <option>Sri Pachaiammal Agro Service, Madukarai</option>
                            <option>Sri Kumaran Enterprises, Embalam</option>
                            <option>Sri Gubheran Enterprises, Embalam</option>
                            <option>Sakthi Agency</option>
                            <option>Sri Vinayaga Enterprises, Karikalampakkam</option>
                            <option>PAPCO, Kurivinatham</option>
                            <option>S.K Agency</option>
                            <option>Thirumala Fertilizers</option>
                            <option>Murugan Agro Service, Bahour</option>
                            <option>Santhanam Agro Service, Ariyankuppam</option>
                            <option>Ramajayam, Ariyankuppam</option>
                            <option>Rama Fertilizers, T.N. Palayam</option>
                            <option>Sri Malar Fertilizers</option>
                            <option>New Royal Agri Clinic, Muthialpet</option>
                            <option>Royal Agri Clinic, Puducherry</option>
                            <option>Sri Balaji Agro Service</option>
                            <option>Bharani Agro Service, Sorapet</option>
                            <option>Fathima Stores, Thirukkanur</option>
                            <option>Thirumurugan Fertilizer Store</option>
                            <option>Sri Lakshmi Fertilizers, Thirukkanur</option>
                            <option>Sabari Agri. Clinic, Madagadipet</option>
                            <option>Saravana fertilizers, Madagadipet</option>
                            <option>Murugan Fertilizers, Thirubhuvanai</option>
                            <option>Agrl. Coopertive Society, Thirubhuvanai</option>
                            <option>Namadu Parry Maiyam, Andiyarpalayam</option>
                            <option>Sathya Priya Agro Service</option>
                            <option>Arumugam Chettiar Fertlizer stores</option>
                            <option>Mohammad Store, Katterikuppam</option>
                            <option>M.V.A Traders, Lingareddipalayam</option>
                            <option>Angal Parameswarai Agro centre Santhaputhukuppam</option>
                            <option>Annai Agro Service, Katterikuppam</option>
                            <option>Sri Mathathamam Uzhavar Ulagam, Katterikuppam</option>
                            <option>Selva Traders, Suthukeny</option>
                            <option>Lakshmi Agro Service Centre</option>
                            <option>Gnanambiga Traders, Ariyur</option>
                            <option>AMK Chettiar, Villianur</option>
                            <option>Venkateshwara, Villianur</option>
                            <option>PAPCO, Villianur</option>
                            <option>SKM Traders, Vizhidyur</option>
                            <option>UZhavan Agri Clinic, Vizhidyur</option>
                            <option>Murugan Agro Traders, Thirunallar</option>
                            <option>Dhinesh Agency, Thirunallar</option>
                            <option>Srinivasa Agency, Nedungadu</option>
                            <option>Karaikal Coop Central PSMS, Karaikal</option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Product_Name">Name of product supplied</label>
                        <select type="text" name="Product_Name" placeholder="Name of product supplied" class="form-control">
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

                    <div class="form-group col-md-6">
                        <label for="Invoice">Enter the Invoice </label>
                        <input type="text" name="Invoice" placeholder="Enter  the Invoice No. " class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Invoice_Date">Invoice number</label>
                        <input type="date" name="Invoice_Date" placeholder="Invoice number" class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Quantity_supplied">Quantity supplied</label>
                        <input type="text" name="Quantity_supplied" placeholder="Quantity supplied" class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Closing_Stock">Company </label>
                        <select type="text" name="company" placeholder="Company " class="form-control">
                            <option>MFL</option>
                            <option>SPIC</option>
                            <option>FACT</option>
                            <option>Green star</option>
                            <option>IPL</option>
                            <option>CIL</option>
                            <option>KRIKCHO</option>
                            <option>IFFCO</option>
                        </select>
                    </div>
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
