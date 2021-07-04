<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form4 extends Model
{
    protected $fillable=['period', 'Insecticide_name', 'Type_of_Insecticide', 'Batch_no', 'Date_Of_expiry', 'Total_quantity', 'Quantity_utilized', 'Quantity_sold'];
}
