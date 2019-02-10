<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('class');
            $table->string('department')->nullable();
            $table->string('gender');
            $table->string('religion');
            $table->string('birthDate');
            $table->string('mobile');
            $table->text('address')->nullable();
            $table->string('father');
            $table->string('father_occupation');
            $table->string('mother')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('payment')->nullable();
            $table->string('amount')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->string('trxid')->nullable();
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
        Schema::dropIfExists('admissions');
    }
}
