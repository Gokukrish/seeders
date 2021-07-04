<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    //
    protected $fillable=['Month_Year', 'Name', 'Crop', 'Class_of_Seed', 'Opening_Stock', 'Quantity_Purchased', 'Total_quantity_imported', 'Total', 'Total_quantity_sold', 'Total_quanttity_exported', 'Closing_stock'];
}
