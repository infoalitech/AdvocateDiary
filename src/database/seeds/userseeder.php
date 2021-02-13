<?php

use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	'id'=>1,
        	'name'=>'Zaheer Abbass',
        	'email'=>'zaheer@gmail.com',
        	'password'=>Hash::make('123456789')
        ]);
        DB::table('groups')->insert([
        	'id'=>1,
        	'name'=>'admin'
        ]);
        DB::table('user_groups')->insert([
        	'id'=> 1,
        	'user_id'=> 1,
        	'group_id'=> 1
        ]);



        DB::table('group_permissions')->insert([
        	'id'=> 1,
        	'group_id'=> 1,
        	'permission_id'=> 11
        ]);
        DB::table('group_permissions')->insert([
        	'id'=> 2,
        	'group_id'=> 1,
        	'permission_id'=> 12
        ]);
        DB::table('group_permissions')->insert([
        	'id'=> 3,
        	'group_id'=> 1,
        	'permission_id'=> 8
        ]);
        DB::table('group_permissions')->insert([
        	'id'=> 4,
        	'group_id'=> 1,
        	'permission_id'=> 6
        ]);
        DB::table('group_permissions')->insert([
        	'id'=> 5,
        	'group_id'=> 1,
        	'permission_id'=> 5
        ]);
        DB::table('group_permissions')->insert([
        	'id'=> 6,
        	'group_id'=> 1,
        	'permission_id'=> 4
        ]);
        DB::table('group_permissions')->insert([
        	'id'=> 7,
        	'group_id'=> 1,
        	'permission_id'=> 1
        ]);
        DB::table('group_permissions')->insert([
            'id'=> 8,
            'group_id'=> 1,
            'permission_id'=> 9
        ]);



    }
}
