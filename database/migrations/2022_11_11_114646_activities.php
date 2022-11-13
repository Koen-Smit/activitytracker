<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')->references('id')->on('users');

            $table->foreignId('category_id')->References('id')->on('categories');

            $table->date('activity_date');

            $table->time('duration');

            $table->boolean('record')->nullable();

            $table->float('burned_calories');

            $table->string('remarks')->nullable();

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
        //
    }
};
