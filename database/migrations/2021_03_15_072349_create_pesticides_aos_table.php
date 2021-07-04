<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesticidesAosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesticides_aos', function (Blueprint $table) {
            $table->id();
            $table->string('Individual_Name');
            $table->string('Firm_Name');
            $table->string('Address');
            $table->string('Contact_Person');
            $table->string('Register_Mobile_No');
            $table->string('Licesence_No');
            $table->string('Date_of_expiry_Licence');
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
        Schema::dropIfExists('pesticides_aos');
    }
}
