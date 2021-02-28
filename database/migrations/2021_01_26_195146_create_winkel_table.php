<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinkelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winkel', function (Blueprint $table) {
            $table->id("winkelcode");
            $table->string("naam", 100)->nullable(false);
            $table->string("adres", 100)->nullable(false);
            $table->string("postcode", 100)->nullable(false);
            $table->string("vestigingsplaats", 100)->nullable(false);
            $table->integer("telefoonnummer")->nullable(false);
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
        Schema::dropIfExists('winkel');
    }
}
