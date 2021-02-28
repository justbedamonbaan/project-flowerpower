<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactuurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factuur', function (Blueprint $table) {
            $table->id("factuurnummer");
            $table->date("datetime");
            $table->unsignedBigInteger("klantencode");//alles in deze colom
            $table->foreign("klantencode")->references("id")->on("users")->onDelete("cascade");//foreign is foreignkey in foreigntabel
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
        Schema::dropIfExists('factuur');
    }
}
