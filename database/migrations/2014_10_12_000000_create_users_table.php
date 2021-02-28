<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',100)->nullable(false)->unique();
            $table->string("voorletters", 100)->nullable(false)->default(100);
            $table->string("tussenvoegsel", 100)->nullable(true)->default(30);
            $table->string("achternaam")->nullable(false)->default(100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string("adres", 100)->nullable(false);
            $table->string("postcode", 100)->nullable(false)->default(100);
            $table->string("woonplaats", 100)->nullable(false)->default(100);
            $table->date("geboortedatum")->nullable(false);
            $table->string('password')->default(100);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
