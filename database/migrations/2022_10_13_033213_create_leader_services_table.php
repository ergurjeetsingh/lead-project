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
        Schema::create('leader_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leader_id');
            
            $table->timestamps();

            $table->foreign('leader_id')->references('id')->on('leaders')->onDelete ('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leader_services');
    }
};
