@extends('main.app')
@section('content')


    <br>
    <h3 class="font-weight-bold" >INSECTICIDES/PESTICIDES AVAILABILITY MONITORING INFORMATION SYSTEM </h3>
    <br>
    <div class="card font-weight-bold">
        <div class="card-header">
            MONTHLY RETURNS OF TECHNICAL GRADE INSECTICIDES/PESTICIDES (MANUFACTURED/IMPORTED)
        </div>

        <div class="card-body">
            <form action="{{ route('form4.update',$form4->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                <div class="form-group col-md-6">
                <label for="period">Report for the period  </label>
                <input type="month" name="period" value="{{$form4->period}}" class="form-control" />
                </div>
                
                <div class="form-group col-md-6">
                <label for="Insecticide_name"> Name of the Insecticide</label>
                <select type="text" name="Insecticide_name"  class="form-control" >
                    <option >{{$form4->Insecticide_name}}</option>

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
                <label for="Type_of_Insecticide">Type of insecticide</label>
                <select type="text" name="Type_of_Insecticide" placeholder="Type of insecticide" class="form-control" >
                    <option >{{$form4->Type_of_Insecticide}}</option>
                    <option>Imported</option>
                    <option>Manufactured</option>
                </select>
                </div>
                
                <div class="form-group col-md-6">
                <label for="Batch_no">Batch No. </label>
                <input type="text" name="Batch_no" value="{{$form4->Batch_no}}" class="form-control" />
                </div>
                </div>
                
                
                <div class="row">
                <div class="form-group col-md-6">
                <label for="Date_Of_expiry">Date of expiry  </label>
                <input type="date" name="Date_Of_expiry" value="{{$form4->Date_Of_expiry}}" class="form-control" />
                </div>
                
                <div class="form-group col-md-6">
                <label for="Total_quantity">Details of total quantity imported/ manufactured (Metric tonnes)</label>
                <input type="text" name="Total_quantity" value="{{$form4->Total_quantity}}" class="form-control" />
                </div>
                </div>
                
                
                <div class="row">
                <div class="form-group col-md-6">
                <label for="Quantity_utilized">Quantity utilized for formulations (Metric tonnes) </label>
                <input type="text" name="Quantity_utilized" value="{{$form4->Quantity_utilized}}" class="form-control" />
                </div>
                <div class="form-group col-md-6">
                    <label for="Quantity_sold">Quantity sold </label>
                    <input type="text" name="Quantity_sold" value="{{$form4->Quantity_sold}}" class="form-control" />
                </div>
                </div>
                
                <div class="p-3 mb-4">
                <div class="text-center">
                <button type="submit" name="add" id="add" class="btn btn-primary ">Add</button>
                </div>
                </div>
                </form>
        </div>
    </div>


@endsection

