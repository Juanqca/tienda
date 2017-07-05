<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvideersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provideers', function (Blueprint $table) {
            $table->increments("id");
            $table->String("name");
            $table->String("contact_name");
            $table->String("address");
            $table->String("city");
            $table->String("phone");
            $table->integer("provideertype_id")->unsigned();
            $table->foreign("provideertype_id")->references("id")->on("provideertypes");
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
        Schema::dropIfExists('provideers');
    }
}
