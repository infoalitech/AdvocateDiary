<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foreign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            
        });
        Schema::table('user_permissions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
        });
        Schema::table('user_groups', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
        Schema::table('group_permissions', function (Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
        });

        Schema::table('lawyers', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('case_documents', function (Blueprint $table) {
            $table->foreign('kase_id')->references('id')->on('kases')->onDelete('cascade');
        });
        Schema::table('kases', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('case_categories')->onDelete('cascade');
            $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('cascade');
        });
        Schema::table('witnes', function (Blueprint $table) {
            $table->foreign('kase_id')->references('id')->on('kases')->onDelete('cascade');
        });
        Schema::table('bills', function (Blueprint $table) {
            $table->foreign('kase_id')->references('id')->on('kases')->onDelete('cascade');
        });
        Schema::table('case_hirings', function (Blueprint $table) {
            $table->foreign('kase_id')->references('id')->on('kases')->onDelete('cascade');
            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
            $table->foreign('judge_id')->references('id')->on('judges')->onDelete('cascade');
            $table->foreign('hiring_type')->references('id')->on('hiring_types')->onDelete('cascade');
        });
        Schema::table('official_activities', function (Blueprint $table) {
            $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('activity_types')->onDelete('cascade');

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
}
