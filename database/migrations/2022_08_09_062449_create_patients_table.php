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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('no_seri');
            $table->string('location');
            $table->string('sickness');
            $table->string('name');
            $table->string('id_card');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('gender');
            $table->string('address');
            $table->string('domicile')->nullable();;
            $table->integer('phone');
            $table->string('family_name');
            $table->integer('family_phone');
            $table->string('vaccination')->nullable();;
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
        Schema::dropIfExists('patients');
    }
};
