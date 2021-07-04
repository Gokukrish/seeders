<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fertiliser extends Model
{
   
    protected $fillable=['Date','Product_Name','Opening_Stock','Closing_Stock','Cash_Transaction','Cashless_Transaction','No_of_Cash','No_of_Cashless'];
}
