<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Enter_bus_name',200);
            $table->string('Enter_bus_type',200);
            $table->string('Enter_bus_model',50);
            $table->string('Enter_bus_registration',50);
            $table->string('Enter_bus_price',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_details');
    }
}
