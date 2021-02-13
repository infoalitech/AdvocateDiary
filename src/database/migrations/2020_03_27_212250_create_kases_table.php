<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable(); 
            $table->unsignedBigInteger('lawyer_id')->nullable(); 
            $table->unsignedBigInteger('client_id')->nullable(); 
            $table->string('title')->default('Active'); 
            // $table->string('status')->default('Active'); 
            $table->integer('total')->default(0);
            $table->integer('received')->default(0);
            $table->integer('remaining')->default(0);
            $table->string('result')->nullable();
            $table->string('status')->default('O');
            // O Open  ....   C Closed
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
        Schema::dropIfExists('kases');
    }
}
