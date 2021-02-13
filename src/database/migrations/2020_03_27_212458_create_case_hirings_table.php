<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseHiringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_hirings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->string('narration')->nullable();
            $table->unsignedBigInteger('kase_id')->nullable();
            $table->unsignedBigInteger('court_id')->nullable();
            $table->unsignedBigInteger('judge_id')->nullable();
            $table->unsignedBigInteger('hiring_type')->nullable();
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
        Schema::dropIfExists('case_hirings');
    }
}
