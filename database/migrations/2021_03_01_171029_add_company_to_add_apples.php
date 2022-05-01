<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyToAddApples extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('add_apples', function (Blueprint $table) {
            $table->string("company")->nullable()->after("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('add_apples', function (Blueprint $table) {
            $table->dropColumn("company")->nullable()->after("title");
        });
    }
}
