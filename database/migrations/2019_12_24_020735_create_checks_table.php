<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('user_id')->unsigned()->references('id')->on('users');
            $table->biginteger('goal_id')->unsigned()->references('id')->on('goals');
            $table->string('selectgoal');
            $table->string('datelog');
            $table->string('selectdegree');
            $table->text('bodyreason');
            $table->text('bodygood');
            $table->text('bodybad');
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
        Schema::dropIfExists('checks');
    }
}
