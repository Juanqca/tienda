<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->text("description");
            $table->integer("product_id")->unsigned();
            $table->foreign("product_id")->references("id")->on("products");
            $table->integer("promotiontype_id")->unsigned();
            $table->foreign("promotiontype_id")->references("id")->on("promotiontypes");
            $table->datetime('started_at');
            $table->datetime('finished_at');
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
        Schema::dropIfExists('promotions');
    }
}
