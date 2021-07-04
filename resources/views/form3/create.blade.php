@extends('main.app')
@section('content')


    <br>
    <h3 class="font-weight-bold">INSECTICIDES/PESTICIDES AVAILABILITY MONITORING INFORMATION SYSTEM</h3>
    <br>
    <div class="card font-weight-bold">
        <div class="card-header">
            REGISTER FOR THE SALE OF INSECTICIDES/PESTICIDES(RETAILER)
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
            <form action="{{ route('form3.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Date">Report for the period </label>
                        <input type="month" name="Date" placeholder="Report for the period " class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Insecticide">Particulars of the Insecticide</label>
                        <select type="text" name="Insecticide" placeholder="Particulars of the Insecticide"
                            class="form-control">
                            <option>2,4-D Amine salt</option>
                            <option>2,4-Dichlorophenoxy Acetic Acid</option>
                            <option>Abamectin*</option>
                            <option>Acephate</option>
                            <option>Acetamiprid</option>
                            <option>Afidopyropen</option>
                            <option>Allethrin</option>
                            <option>Alphacypermethrin</option>
                            <option>Alphanaphthyl Acetic Acid</option>
                            <option>Aluminium Phosphide</option>
                            <option>Ametroctradin</option>
                            <option>Ametryn</option>
                            <option>Amisulbrom (FI-WRT)</option>
                            <option>Ampelomycesquisqualis</option>
                            <option>Anilophos</option>
                            <option>Atrazine</option>
                            <option>Aureofungin</option>
                            <option>Azadirachtin (Neem Products)</option>
                            <option>Azimsulfuron</option>
                            <option>Azoxystrobin</option>
                            <option>Bacillus sphaericus</option>
                            <option>Bacillus subtillus</option>
                            <option>Bacillus thuringiensis var. galleriae</option>
                            <option>Bacillus thuringiensis var. israelensis</option>
                            <option>Bacillus thuringiensis var. kurstaki</option>
                            <option>Barium Carbonate</option>
                            <option>Beauveriabassiana</option>
                            <option>Benalaxyl (TIM)</option>
                            <option>Benalaxyl M</option>
                            <option>Bendiocarb</option>
                            <option>Benfuracarb</option>
                            <option>Bensulfuron Methyl</option>
                            <option>Bentazone TI</option>
                            <option>Beta Cyfluthrin</option>
                            <option>Bifenazate</option>
                            <option>Bifenthrin</option>
                            <option>Bispyribac Sodium</option>
                            <option>Bitertanol</option>
                            <option>Boscalid</option>
                            <option>Brodifacoum</option>
                            <option>Bromadiolone</option>
                            <option>Buprimate (FI-WRT)</option>
                            <option>Buprofezin</option>
                            <option>Butachlor</option>
                            <option>Captan</option>
                            <option>Carbendazim</option>
                            <option>Carbofuran</option>
                            <option>Carbosulfan</option>
                            <option>Carboxin</option>
                            <option>Carfentrazone Ethyl</option>
                            <option>Carpropamid</option>
                            <option>Cartap Hydrochloride</option>
                            <option>Chlorantraniliprole</option>
                            <option>Chlorfenopyr</option>
                            <option>Chlorfluazuron</option>
                            <option>Chlorimuron ethyl</option>
                            <option>Chlormequat Chloride (CCC)</option>
                            <option>Chlorothalonil</option>
                            <option>Chlorpropham (TI),TIM</option>
                            <option>Chlorpyriphos</option>
                            <option>Chlorpyriphos Methyl</option>
                            <option>Chromafenozide</option>
                            <option>Cinmethylene</option>
                            <option>Clethodim (FI-WRT )</option>
                            <option>Clodinafop-propargyl</option>
                            <option>Clomazone</option>
                            <option>Clothianidin</option>
                            <option>Copper Hydroxide</option>
                            <option>Copper Oxychloride</option>
                            <option>Copper Sulphate</option>
                            <option>Coumachlor</option>
                            <option>Coumatetralyl</option>
                            <option>Cuprous Oxide</option>
                            <option>Cyantraniliprole</option>
                            <option>Cyazofamid</option>
                            <option>Cyenopyrafen (FI-WRT)</option>
                            <option>Cyflufenamide(FI-WRT )</option>
                            <option>Cyflumetofen</option>
                            <option>Cyfluthrin</option>
                            <option>Cyhalofop-butyl</option>
                            <option>Cymoxanil</option>
                            <option>Cypermethrin</option>
                            <option>Cyphenothrin</option>
                            <option>Cyproconazole (TI)</option>
                            <option>Dazomet</option>
                            <option>Deltamethrin (Decamethrin)</option>
                            <option>Diafenthiuron</option>
                            <option>Dichloro Diphenyl Trichloroethane (DDT)</option>
                            <option>Dichloropropene and Dichloropropane mixture (DD mixture)</option>
                            <option>Diclofop-Methyl</option>
                            <option>Diclosulam</option>
                            <option>Dicofol</option>
                            <option>Difenoconazole</option>
                            <option>Diflubenzuron</option>
                            <option>Dimethoate</option>
                            <option>Dimethomorph</option>
                            <option>Dinocap</option>
                            <option>Dinotefuron</option>
                            <option>Dithianon</option>
                            <option>Diuron</option>
                            <option>Dodine</option>
                            <option>D-trans Allethrin</option>
                            <option>Edifenphos</option>
                            <option>Emamectin Benzoate</option>
                            <option>Epoxyconazole</option>
                            <option>Ethephon</option>
                            <option>Ethion</option>
                            <option>Ethiprole</option>
                            <option>Ethofenprox (Etofenprox)</option>
                            <option>Ethoxysulfuron</option>
                            <option>Ethylene Dichloride and Carbon Tetrachloride mixture (EDCT Mixture 3:1)</option>
                            <option>Etoxazole(FI)</option>
                            <option>Famoxadone</option>
                            <option>Fenamidone</option>
                            <option>Fenazaquin</option>
                            <option>Fenitrothion</option>
                            <option>Fenobucarb (BPMC)</option>
                            <option>Fenoxaprop-p-ethyl</option>
                            <option>Fenpropathrin</option>
                            <option>Fenpyroximate</option>
                            <option>Fenvalerate</option>
                            <option>Fipronil</option>
                            <option>Flonicamid</option>
                            <option>Fluazifop-p-butyl</option>
                            <option>Flubendiamide</option>
                            <option>Flucetosulfuron</option>
                            <option>Fluchloralin</option>
                            <option>Fluensulfone 47% TC (MUP) (FI)</option>
                            <option>Flufenacet</option>
                            <option>Flufenoxuron</option>
                            <option>Flufenzine</option>
                            <option>Flumioxazin</option>
                            <option>Fluopicolide</option>
                            <option>Fluopyram and its metabolite</option>
                            <option>Flupyradifurone</option>
                            <option>Flusilazole (TI)</option>
                            <option>Fluthiacet methyl (TIM)</option>
                            <option>Fluvalinate</option>
                            <option>Fluxapyroxad (Combination formulation Fluxapyroxad167 g/L + Pyraclostrobin 333g/l SC (FI
                                -WRT)</option>
                            <option>Fomesafen</option>
                            <option>Forchlorfenuron</option>
                            <option>Fosetyl-Al</option>
                            <option>Gibberellic Acid</option>
                            <option>Gossyplure (PB-RopeL)</option>
                            <option>Glufosinate Ammonium</option>
                            <option>Glyphosate</option>
                            <option>Haloxyfop-R-methyl {Haloxyfop-R-methyl 10.55%.EC formulation under category (FI)}
                            </option>
                            <option>Helosulfuron methyl</option>
                            <option>Hexaconazole</option>
                            <option>Hexazinone</option>
                            <option>Hexythiazox</option>
                            <option>Hydrogen Cyanamide</option>
                            <option>Imazamox</option>
                            <option>Imazethapyr</option>
                            <option>Imidacloprid</option>
                            <option>Imiprothrin</option>
                            <option>Indaziflam { combination formulation Indaziflam+ Glyphosate ammonium under category
                                (FI)}</option>
                            <option>Indoxacarb</option>
                            <option>Iprobenfos (Kitazin)</option>
                            <option>Iprodione</option>
                            <option>Iprovalicarb</option>
                            <option>Isoprothiolane</option>
                            <option>Isoproturon</option>
                            <option>Kasugamycin</option>
                            <option>Kresoxim Methyl</option>
                            <option>Lambdacyhalothrin</option>
                            <option>Lime Sulphur</option>
                            <option>Lufenuron</option>
                            <option>Magnesium Phosphide Plates</option>
                            <option>Malathion</option>
                            <option>Mancozeb</option>
                            <option>Mandipropamid</option>
                            <option>Mepiquate Chloride</option>
                            <option>Meptyldiinocop</option>
                            <option>Mesosulfuron Methyl ( combination formulation Mesosulfuron Methyl + Iodosulfuron Methyl
                                Sodium)</option>
                            <option>Metaflumizone</option>
                            <option>Metalaxyl</option>
                            <option>Metalaxyl-M</option>
                            <option>Metaldehyde</option>
                            <option>Metamifop TI</option>
                            <option>Metamitron (TIM)</option>
                            <option>Metarhiziumanisopliae</option>
                            <option>Methabenzthiazuron</option>
                            <option>Methomyl</option>
                            <option>Methoxyfenazide (FI- WRT)</option>
                            <option>Methyl Bromide</option>
                            <option>Methyl Chlorophenoxy Acetic Acid (MCPA)</option>
                            <option>1-MethylCyclopropene 3.3% V.P (1-MCP)(FI-WRT )</option>
                            <option>Metiram</option>
                            <option>Metofluthrin</option>
                            <option>Metolachlor</option>
                            <option>Metrafenone</option>
                            <option>Metribuzin</option>
                            <option>Metsulfuron Methyl</option>
                            <option>Milbemectin</option>
                            <option>Monocrotophos</option>
                            <option>Myclobutanil</option>
                            <option>Novaluron</option>
                            <option>Nuclear polyhyderosis virus of Helicoverpaarmigera</option>
                            <option>Nuclear polyhyderosis virus of Spodopteralitura</option>
                            <option>Oxadiargyl</option>
                            <option>Oxadiazon</option>
                            <option>Oxathiapipron</option>
                            <option>Orthosulfamuron</option>
                            <option>Oxycarboxin</option>
                            <option>Oxydemeton-Methyl</option>
                            <option>Oxyfluorfen</option>
                            <option>Paclobutrazol</option>
                            <option>Paraquat dichloride</option>
                            <option>Penconazole</option>
                            <option>Pencycuron</option>
                            <option>Pendimethalin</option>
                            <option>Penflufen*</option>
                            <option>Penoxsulam</option>
                            <option>Permethrin</option>
                            <option>Phenthoate</option>
                            <option>Phosalone</option>
                            <option>Picoxystrobin’TIM</option>
                            <option>Pinoxaden</option>
                            <option>Prallethrin</option>
                            <option>Pretilachlor</option>
                            <option>Primiphos-methyl</option>
                            <option>Prochloraz TI</option>
                            <option>Profenophos</option>
                            <option>Prohexadione Calcium</option>
                            <option>Propamocarb hydrochloride technical 66% w/w min (Aqueous concentrate )</option>
                            <option>Propanil</option>
                            <option>Propaquizafop</option>
                            <option>Propergite</option>
                            <option>Propetamphos</option>
                            <option>Propiconazole</option>
                            <option>Propineb</option>
                            <option>Propoxur</option>
                            <option>Pseudomonas fluorescens</option>
                            <option>Pymetrozin (FI), TIM</option>
                            <option>Pyraclostrobin</option>
                            <option>Pyrazosulfuron ethyl</option>
                            <option>Pyrethrin (pyrethrum )</option>
                            <option>Pyridaben (FI- WRT)</option>
                            <option>Pyridalyl</option>
                            <option>Pyriproxyfen (TI)</option>
                            <option>Pyrithiobac sodium</option>
                            <option>Pyroxasulfon (FI- WRT)</option>
                            <option>Quinalphos</option>
                            <option>Quizalofop ethyl</option>
                            <option>Quizalofop-P-tefuryl</option>
                            <option>S-bioallethrin</option>
                            <option>Sodium acifluorfen (Combination formulation Clodinafop-propargyl+ Sodium acifluorfen)
                            </option>
                            <option>Sodium paranitrophinolate</option>
                            <option>Spinetoram</option>
                            <option>Spinosad</option>
                            <option>Spiromesifen</option>
                            <option>Spirotetramat</option>
                            <option>Streptomycin + Tetracycline</option>
                            <option>Sulfentrazone(TIM)</option>
                            <option>Sulfosulfuron</option>
                            <option>Sulfoxaflor</option>
                            <option>sulphur</option>
                            <option>Tebuconazole</option>
                            <option>Tembotrione</option>
                            <option>Temephos</option>
                            <option>Tetraconazole (FI)</option>
                            <option>Thiacloprid</option>
                            <option>Thifluzamide</option>
                            <option>Thiobencarb (Benthiocarb)</option>
                            <option>Thiocyclam Hydrogen oxalate</option>
                            <option>Thiodicarb</option>
                            <option>Thiomethoxam</option>
                            <option>Thiophanate-Methyl</option>
                            <option>Thiram</option>
                            <option>Tolfenpyrad (TIM)</option>
                            <option>Topramezone</option>
                            <option>Transfluthrin</option>
                            <option>Triacontanol</option>
                            <option>Triadimefon</option>
                            <option>Triafamone ( combination formulation Triafamone 20% w/w + Ethoxysulfuron 10% WG % w/w SC
                                FI)</option>
                            <option>Triallate</option>
                            <option>Triasulfuron</option>
                            <option>Trichodermaharzianum</option>
                            <option>Trichoderma viride</option>
                            <option>Tricyclazole</option>
                            <option>Trifloxistrobin</option>
                            <option>Triflumezopyrim (TIM)</option>
                            <option>Validamycin</option>
                            <option>Verticilliumlecanii</option>
                            <option>Zinc Phosphide</option>
                            <option>Zineb</option>
                            <option>Ziram</option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="CIB_Reg_NO">CIR Registration No.</label>
                        <input type="text" name="CIB_Reg_NO" placeholder="CIR Registration No." class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="date_of_receipt">CIR Registration Month and Year</label>
                        <input type="month" name="date_of_receipt" placeholder="CIR Registration Month and Year"
                            class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Manufacturer_name">Name of the Manufacturer from whom received</label>
                        <select type="text" name="Manufacturer_name"
                            placeholder="Name of the Manufacturer from whom received" class="form-control">
                            <option>Godrej Consumer Products Ltd,Mannadipet</option>
                            <option>Godrej Consumer Products Ltd,Sethur Village</option>
                            <option>Godrej Consumer Products Ltd,Kurumbagaam Village</option>
                            <option>Godrej Consumer Products Ltd,Kattukuppm </option>
                            <option>ROM VIJAY BIOOTECH PRIVATE Ltd</option>
                            <option>SHREE JAYALAKSHMI INDUSTRIES</option>
                            <option>Innovative & Innovatorrs(P) Ltd</option>
                            <option>JYOTHY LABS LIMITED </option>
                            <option>SOORYA REPELLENTS </option>
                            <option>VIMKAR CONTRACTS WORKS LLP</option>
                            <option>GOKULAM ENTERPRISES </option>
                            <option>DELTA CORPORATION</option>
                            <option>VAPOR SOLUTIONS </option>
                            <option>ARGUS’E POLYMERS </option>
                            <option>Surya Home Care Products </option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Suplier_name">Name of supplier/ distributor, if any, through whom received</label>
                        <select type="text" name="Suplier_name"
                            placeholder="Name of supplier/ distributor, if any, through whom received" class="form-control">
                            <option>Namdhu Pari Maiyam</option>
                            <option>Rama Traders</option>
                            <option>M. M.T. Pest control</option>
                            <option>Santhanam Agro Service</option>
                            <option>Deva Fertilizers</option>
                            <option>Murugan Agro Agencies</option>
                            <option>Ambal Agro Centre</option>
                            <option>Aruna Agri Clinic</option>
                            <option>Kathiravan Fertilizers</option>
                            <option>Rashi Trader</option>
                            <option>S.K. Agency</option>
                            <option>Sree Gubheran Enterprises</option>
                            <option>Kumaran Agencies</option>
                            <option>Sri Vinayaga Agri Clini</option>
                            <option>Sri Balaji Agro Centre</option>
                            <option>Coromandel International Ltd.</option>
                            <option>Annai Uzhavan Agri Clinic & Farm Consultancy Services</option>
                            <option>Marutham Agri Clinic & Farm Consultancy Services</option>
                            <option>Murugan Agro Service</option>
                            <option>S.K.M. Traders</option>
                            <option>Sri Balaji Agencies</option>
                            <option>Sri Dhinesh Agencies</option>
                            <option>Sri Srinivasa Agencies</option>
                            <option>Delta Agro</option>
                            <option>Santhavel Agro Service</option>
                            <option>Sri Uzhavan Agri Clinic and Consultancy Services</option>
                            <option>Jayalakshmi Pannai Service</option>
                            <option>Vairakannu Agro Centre</option>
                            <option>Ariharan Agri Agency</option>
                            <option>Greenstar Fertilizers Ltd</option>
                            <option>Vairakkannu Fertilizers</option>
                            <option>Saranarayana Agencies</option>
                            <option>Srimath Thamam Uzhavar Oulagam</option>
                            <option>Gnanambiga Traders</option>
                            <option>Pudhuvai Agro Products Producer Company Limited</option>
                            <option>Kissan HI-TEC</option>
                            <option>Sabari Agri Clinic</option>
                            <option>Sri Pachiammal Agro Centre</option>
                            <option>Thillai Agro Centre</option>
                            <option>Dharani Agro Agency</option>
                            <option>Sri Lakshmi Fertilizers</option>
                            <option>Venkateswara Agro Centre</option>
                            <option>Royal Agri Clinic</option>
                            <option>Sri Velmurugan Fertilizers</option>
                            <option>NISSI Agri Clinic</option>
                            <option>Sathiya Priya Agro Service</option>
                            <option>VDR Agri Clinic</option>
                            <option>Lakshmi Agro Centre</option>
                            <option>Puduvai Agro Service</option>
                            <option>Ishana Enterprises</option>
                            <option>Jeeva Agro Service</option>
                            <option>National Pest Control and Agro Service</option>
                            <option>New Royal Agri Clinic</option>
                            <option>PCI Pest Control Private Limited</option>
                            <option>Star Agri Clinic</option>
                            <option>Mars Enterprise</option>
                            <option>Murugan Agro Traders</option>
                            <option>NISSI Agri Clinic</option>
                            <option>Thirumurugan Fertilizers</option>
                            <option>Adma India Limited</option>
                            <option>A. M. Krishnamoorthy Chettiar & Sons</option>
                            <option>Venkateswara Enterprises</option>
                            <option>Madras Fertilizers Ltd.</option>
                            <option>Pudhuvai Agro Products</option>
                            <option>Producer Company Limited"</option>
                            <option>Sumathi Agency</option>
                            <option>Venkateswara Enterprises</option>
                            <option>Manda Suryanarayana Traders</option>

                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Batch_no">Batch number</label>
                        <input type="text" name="Batch_no" placeholder="Batch number" class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Date_of_Manufacturer">Date of Manufacture</label>
                        <input type="date" name="Date_of_Manufacturer" placeholder="Date of Manufacture"
                            class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Date_of_expiry">Date of expiry</label>
                        <input type="date" name="Date_of_expiry" placeholder="Date of expiry" class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Invoice_detail">Invoice details, No., date and quantity (Metric ton. Vide which supply
                            received</label>
                        <input type="text" name="Invoice_detail"
                            placeholder="Invoice details, No., date and quantity (Metric ton. Vide which supply received"
                            class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Quantity">Quantity (metric tonnes)</label>
                        <input type="text" name="Quantity" placeholder="Quantity (metric tonnes)" class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Previous_balance">Previous balance, if any (closing balance of the previous
                            month)</label>
                        <input type="text" name="Previous_balance"
                            placeholder="Previous balance, if any (closing balance of the previous month)"
                            class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Reciept_for_Month">Receipt for the month</label>
                        <input type="text" name="Reciept_for_Month" placeholder="Receipt for the month"
                            class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Distributed_Month">Distributed for the month</label>
                        <input type="text" name="Distributed_Month" placeholder="Distributed for the month"
                            class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Balance">Balance</label>
                        <input type="text" name="Balance" placeholder="Balance" class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Bill_No">Bill No. (Name & address of whom sold/ distributed) date and quantity sold/
                            distributed</label>
                        <input type="text" name="Bill_No"
                            placeholder="Bill No. (Name & address of whom sold/ distributed) date and quantity sold/ distributed"
                            class="form-control" />
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Remarks">Remarks</label>
                        <input type="text" name="Remarks" placeholder="Remarks" class="form-control" />
                    </div>
                </div>
                <div class="p-3 mb-4">
                    <div class="text-center">
                        <button type="submit" name="add" id="add" class="btn btn-success ">Add</button>
                    </div>
                </div>
            </form>
            {{-- <table class="table">
               
                <tbody>
               
                <form action="{{ route('form3.store') }}" method="POST">
                 @csrf
                <tr>
                <td><input type="date" name="Date" placeholder="Report for the period " class="form-control" /></td>  
                <td><input type="text" name="Insecticide" placeholder="Particulars of the Insecticide" class="form-control" /></td>  
                <td><input type="text" name="CIR_Reg_NO" placeholder="CIR Registration No." class="form-control" /></td> 
                </tr>
                <tr>
                <td><input type="date" name="date_of_receipt" placeholder="CIR Registration Month and Year" class="form-control" /></td> 
                <td><input type="text" name="Manufacturer_name" placeholder="Name of the Manufacturer from whom received" class="form-control" /></td> 
                <td><input type="text" name="Suplier_name" placeholder="Name of supplier/ distributor, if any, through whom received" class="form-control" /></td> 
                </tr> 
               
                <tr> 
                <td><input type="text" name="Batch_no" placeholder="Batch number" class="form-control" /></td> 
                <td><input type="date" name="Date_of_Manufacturer" placeholder="Date of Manufacture" class="form-control" /></td> 
                <td><input type="date" name="Date_of_expiry" placeholder="Date of expiry" class="form-control" /></td> 
                </tr>
                <tr> 
                <td><input type="text" name="Invoice_detail" placeholder="Invoice details, No., date and quantity (Metric ton. Vide which supply received" class="form-control" /></td> 
                <td><input type="text" name="Quantity" placeholder="Quantity (metric tonnes)" class="form-control" /></td> 
                <td><input type="text" name="Previous_balance" placeholder="Previous balance, if any (closing balance of the previous month)" class="form-control" /></td> 
                </tr> 
                <tr> 
                    <td><input type="month" name="Reciept_for_Month" placeholder="Receipt for the month" class="form-control" /></td> 
                    <td><input type="month" name="Distributed_Month" placeholder="Distributed during the month" class="form-control" /></td> 
                    <td><input type="text" name="Balance" placeholder="Balance" class="form-control" /></td> 
                </tr> 
                <tr> 
                    <td><input type="text" name="Bill_No" placeholder="Bill No. (Name & address of whom sold/ distributed) date and quantity sold/ distributed" class="form-control" /></td> 
                    <td><input type="text" name="Remarks" placeholder="Remarks" class="form-control" /></td> 
                </tr> 
                <td><button type="submit" name="add" id="add" class="btn btn-success">Add</button></td> 
                </form>
                </tbody>
            </table> --}}
        </div>
    </div>


@endsection
