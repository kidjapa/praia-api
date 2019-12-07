<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('day_people', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('people_id');

            $table->date('day');
            $table->boolean('checked')->comment('store if people go or not in day saved');

            $table->foreign('people_id')
                ->references('id')->on('peoples')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('dias_pessoas');
    }
}
