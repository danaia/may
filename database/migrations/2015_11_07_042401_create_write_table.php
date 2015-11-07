<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->text('writings')->nullable();

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
        Schema::drop('writes');
    }
}
