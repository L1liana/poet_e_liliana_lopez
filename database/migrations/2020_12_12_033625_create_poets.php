<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('poet');
        Schema::create('poet', function (Blueprint $table) {
            $table->increments('Poet_code');
            $table->string('First_name', 30);
            $table->string('Surname', 40);
            $table->string('Address', 100);
            $table->string('Postcode', 20);
            $table->string('Telephone_number', 30);
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
        Schema::table('poet', function (Blueprint $table) {
            Schema::dropIfExists('poet');
        });
    }
}
