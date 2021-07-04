<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFertilisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fertilisers', function (Blueprint $table) {
            $table->id();
            $table->string('Date');
            $table->string('Product_Name');
            $table->integer('Opening_Stock');
            $table->integer('Closing_Stock');
            $table->integer('Cash_Transaction');
            $table->integer('Cashless_Transaction');
            $table->integer('No_of_Cash');
            $table->integer('No_of_Cashless');
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
        Schema::dropIfExists('fertilisers');
    }
}
