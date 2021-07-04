<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form3s', function (Blueprint $table) {
            $table->id();
            $table->string('Date');
            $table->string('Insecticide');
            $table->string('CIB_Reg_NO');
            $table->string('date_of_receipt');
            $table->string('Manufacturer_name');
            $table->string('Suplier_name');
            $table->string('Batch_no');
            $table->date('Date_of_Manufacturer');
            $table->date('Date_of_expiry');
            $table->string('Invoice_detail');
            $table->integer('Quantity');
            $table->integer('Previous_balance');
            $table->integer('Reciept_for_Month');
            $table->string('Distributed_Month');
            $table->integer('Balance');
            $table->string('Bill_No');
            $table->string('Remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form3s');
    }
}
