<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form5 extends Model
{
    protected $fillable=['Period', 'Insecticide_Name', 'Type_Of_Insecticede', 'Batch_No', 'Date_of_expiry', 'Total_formulated','Total_quantity'];
}
