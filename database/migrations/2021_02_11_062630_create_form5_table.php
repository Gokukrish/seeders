<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form5s', function (Blueprint $table) {
            $table->id();
            $table->string('Period');
            $table->string('Insecticide_Name');
            $table->string('Type_Of_Insecticede');
            $table->string('Batch_No');
            $table->date('Date_of_expiry');
            $table->string('Total_quantity');
            $table->string('Total_formulated');
            
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
        Schema::dropIfExists('form5s');
    }
}
