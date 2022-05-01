<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiAccessoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mi_accessoires', function (Blueprint $table) {
            $table->id();
            $table->string("company")->nuallable();
            $table->string("title")->nuallable();
            $table->string("type")->nuallable();
            $table->string("price")->nuallable();
            $table->string("image")->nuallable();
            $table->string("qantity")->nuallable();
            $table->string("desc")->nuallable();
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
        Schema::dropIfExists('mi_accessoires');
    }
}
