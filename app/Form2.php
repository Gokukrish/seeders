<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    protected $fillable=['Date', 'Retailer_name', 'Product_Name', 'Invoice', 'Invoice_Date', 'Quantity_supplied', 'company'];

}
