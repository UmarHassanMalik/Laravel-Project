<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_details', function (Blueprint $table) {
            $table->id();
            $table->string('Enter_car_name',200);
            $table->string('Enter_car_type',200);
            $table->string('Enter_car_model',50);
            $table->string('Enter_car_registration',50);
            $table->string('Enter_car_price',50);

            /*$table->unsignedbiginteger('car_details_id');

            $table->foreign('car_details_id')->references('id')->on('car_details')
                ->onDelete('cascade');*/

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
        Schema::dropIfExists('car_details');
    }
}
