<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddRealmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_realmes', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("price")->nullable();
            $table->string("image")->nullable();
            $table->string("quantity")->nullable();
            $table->string("desc")->nullable();
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
        Schema::dropIfExists('add_realmes');
    }
}
