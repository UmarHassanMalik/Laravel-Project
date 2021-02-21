<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikeDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_details', function (Blueprint $table) {
            $table->id();
            $table->string('Enter_bike_name',200);
            $table->string('Enter_bike_type',200);
            $table->string('Enter_bike_model',50);
            $table->string('Enter_bike_registration',50);
            $table->string('Enter_bike_price',50);
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
        Schema::dropIfExists('bike_details');
    }
}
