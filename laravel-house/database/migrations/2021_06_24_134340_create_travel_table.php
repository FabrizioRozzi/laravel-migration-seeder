<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 100);
            $table->string('durata', 50);
            $table->float('price', 10,2);
            $table->text('description');
            $table->string('transporto', 50);
            $table->string('alloggio', 20);
            $table->string('reference', 12);
            $table->string('pensione', 20);
            $table->string('baby_park', 10)->nullable();
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
        Schema::dropIfExists('travel');
    }
}
