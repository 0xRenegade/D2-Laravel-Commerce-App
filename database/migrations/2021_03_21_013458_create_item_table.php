<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("item", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name");
            $table->string("type");
            $table->integer("max_sockets");
            $table->json("requirements");
            $table->integer("durability");
            $table->json("stats");
            $table->json("set_bonuses");
            $table->integar("quantity");
            $table->decimal("price");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("item");
    }
}
