<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_pros', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('year');
            $table->string('place');
            $table->string('job1');
            $table->string('job2');
            $table->string('job3');
            $table->string('job4');
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
        Schema::dropIfExists('resume_pros');
    }
}
