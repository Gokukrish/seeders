<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FertilizerAo extends Model
{
    protected $fillable= ['Individual_Name', 'Firm_Name', 'Address', 'Contact_Person', 'Register_Mobile_No', 'Licesence_No', 'Date_of_expiry_Licence'];
}
