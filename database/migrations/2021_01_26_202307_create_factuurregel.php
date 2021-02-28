<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactuurregel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factuurregel', function (Blueprint $table) {
            $table->id("factuurregel");
            $table->unsignedBigInteger("artikelcode");
            $table->unsignedBigInteger("aantal");
            $table->unsignedBigInteger("factuurnummer");
            $table->decimal("prijs", 6,2)->nullable(false);
            $table->foreign("factuurnummer")->references("factuurnummer")->on("factuur")->onDelete("cascade");
            $table->foreign("artikelcode")->references("artikelcode")->on("artikel")->onDelete("cascade");
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
        Schema::dropIfExists('factuurregel');
    }
}
