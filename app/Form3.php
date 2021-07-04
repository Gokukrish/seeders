<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form3 extends Model
{
    protected $fillable=['Date', 'Insecticide', 'CIB_Reg_NO', 'date_of_receipt', 'Manufacturer_name', 'Suplier_name', 'Batch_no', 'Date_of_Manufacturer', 'Date_of_expiry', 'Invoice_detail', 'Quantity', 'Previous_balance', 'Reciept_for_Month', 'Distributed_Month', 'Balance', 'Bill_No', 'Remarks'];
}
