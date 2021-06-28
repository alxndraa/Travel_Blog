<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'Satoo Admin',
                'email'=>'satoo@gmail.com',
                'phone'=>'081234567891',
                'role'=>'admin',
                'password'=>Hash::make('admin1234')
            ],
            [
                'id'=>2,
                'name'=>'Alexandra',
                'email'=>'alex@gmail.com',
                'phone'=>'08123456789',
                'role'=>'member',
                'password'=>Hash::make('alex123')
            ]
        ]);
    }
}
