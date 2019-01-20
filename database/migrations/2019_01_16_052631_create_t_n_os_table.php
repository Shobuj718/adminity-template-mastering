<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTNOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_n_os', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->integer('mobile')->unique();
            $table->string('email',100)->unique();
            $table->string('password')->nullable();
            $table->text('message');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_n_os');
    }
}
