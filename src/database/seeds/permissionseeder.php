<?php

use Illuminate\Database\Seeder;

class permissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permissions')->insert([
        	'id'=>1,
        	'name'=>'lawyer'
        ]);
        DB::table('permissions')->insert([
        	'id'=>2,
        	'name'=>'clients'
        ]);
        DB::table('permissions')->insert([
        	'id'=>3,
        	'name'=>'witness'
        ]);
        DB::table('permissions')->insert([
        	'id'=>4,
        	'name'=>'court'
        ]);
        DB::table('permissions')->insert([
        	'id'=>5,
        	'name'=>'judge'
        ]);
        DB::table('permissions')->insert([
        	'id'=>6,
        	'name'=>'hiring_type'
        ]);
        DB::table('permissions')->insert([
        	'id'=>7,
        	'name'=>'case'
        ]);
        DB::table('permissions')->insert([
        	'id'=>8,
        	'name'=>'case_category'
        ]);
        DB::table('permissions')->insert([
        	'id'=>9,
        	'name'=>'activity_type'
        ]);
        DB::table('permissions')->insert([
        	'id'=>10,
        	'name'=>'official_activity'
        ]);
        DB::table('permissions')->insert([
        	'id'=>11,
        	'name'=>'auth'
        ]);
        DB::table('permissions')->insert([
        	'id'=>12,
        	'name'=>'profile'
        ]);
    }
}
