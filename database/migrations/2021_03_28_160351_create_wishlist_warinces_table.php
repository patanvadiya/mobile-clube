<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistWarincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlist_warinces', function (Blueprint $table) {
            $table->id();
            $table->string("title_id")->nullable();
            $table->string("variance")->nullable();
            $table->string("price")->nullable();
            $table->string("desc")->nullable();
            $table->string("type")->nullable();
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
        Schema::dropIfExists('wishlist_warinces');
    }
}
