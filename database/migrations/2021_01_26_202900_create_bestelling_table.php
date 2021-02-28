<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestelling', function (Blueprint $table) {
            $table->id("artikelcode");
            $table->unsignedBigInteger("winkelcode");
            $table->integer("aantal");
            $table->unsignedBigInteger("klantencode");
            $table->unsignedBigInteger("medewerkerscode");
            $table->boolean("afgehaald")->nullable(false);
            $table->foreign("artikelcode")->references("artikelcode")->on("artikel")->onDelete("cascade");
            $table->foreign("winkelcode")->references("winkelcode")->on("winkel")->onDelete("cascade");
            $table->foreign("klantencode")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("medewerkerscode")->references("id")->on("users")->onDelete("cascade");
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
        Schema::dropIfExists('bestelling');
    }
}
