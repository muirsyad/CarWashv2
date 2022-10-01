<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('nophone',20);
            // $table->foreign('type_id')->references('id')->on('vehicle_type');
            // $table->foreign('brand_id')->references('id')->on('brand');


            $table->foreign('brand_id')->references('id')->on('brand');
            $table->foreign('type_id')->references('id')->on('vehicle_type');
            $table->foreign('nophone')->references('nophone')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle');
    }
};
