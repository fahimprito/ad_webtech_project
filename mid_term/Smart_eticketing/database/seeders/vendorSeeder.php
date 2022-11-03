<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class vendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('vendors')->insert([
            'username' => 'fahim12',
            'name' => 'fahim ahmed',
            'email' => 'fahim'.'@gmail.com',
            'phone' => 1547895485,
            'password' => Hash::make('pass'),
            'gender' => 'Male',
            'dob' => "1998-08-27",
            'address' => 'banasree',
        ]);
    }
}
