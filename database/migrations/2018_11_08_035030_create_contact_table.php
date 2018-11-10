<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_vn');
            $table->longText('facebook')->nullable();
            $table->longText('instagram')->nullable();
            $table->longText('youtube')->nullable();
            $table->longText('map')->nullable();
            $table->longText('value_en')->nullable();
            $table->longText('value_vn')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
