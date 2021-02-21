<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiscellaneousDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miscellaneous_details', function (Blueprint $table) {
            $table->id();
            $table->string('Enter_miscellaneous_name',200);
            $table->string('Enter_miscellaneous_type',200);
            $table->string('Enter_miscellaneous_model',50);
            $table->string('Enter_miscellaneous_registration',50);
            $table->string('Enter_miscellaneous_price',50);
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
        Schema::dropIfExists('miscellaneous_details');
    }
}