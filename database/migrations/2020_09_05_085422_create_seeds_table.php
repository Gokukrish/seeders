<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeds', function (Blueprint $table) {
            $table->id();
            $table->string('Month_Year');
            $table->string('Name');
            $table->string('Crop');
            $table->string('Class_of_Seed');
            $table->string('Opening_Stock');
            $table->string('Quantity_Purchased');
            $table->string('Total_quantity_imported');
            $table->string('Total');
            $table->string('Total_quantity_sold');
            $table->string('Total_quanttity_exported');
            $table->string('Closing_stock');
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
        Schema::dropIfExists('seeds');
    }
}
 