<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form4s', function (Blueprint $table) {
            $table->id();
            $table->string('period');
            $table->string("Insecticide_name");
            $table->string('Type_of_Insecticide');
            $table->string('Batch_no');
            $table->date('Date_Of_expiry');
            $table->integer('Total_quantity');
            $table->integer('Quantity_utilized');
            $table->integer('Quantity_sold');
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
        Schema::dropIfExists('form4s');
    }
}
