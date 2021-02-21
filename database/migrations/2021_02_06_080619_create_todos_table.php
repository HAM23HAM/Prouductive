<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->longText('description')->nullable();
            $table->dateTime('datentime');
            $table->string('reward')->nullable();
            $table->string('step1')->nullable();
            $table->string('step2')->nullable();
            $table->string('step3')->nullable();
            $table->string('step4')->nullable();
            $table->string('step5')->nullable();
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
        Schema::dropIfExists('todos');
    }
}
