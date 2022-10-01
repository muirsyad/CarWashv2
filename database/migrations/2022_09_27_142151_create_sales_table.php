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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('nophone');
            $table->string('noplate');
            $table->string('status');
            $table->string('payment');
            $table->unsignedBigInteger('cawangan_id');
            $table->unsignedBigInteger('service_id');

            $table->foreign('cawangan_id')->references('id')->on('cawangan');
            $table->foreign('service_id')->references('id')->on('service');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
