<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=0;$i<50;$i++){
            DB::table('customers')->insert([
                'username' => Str::random(10),
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'phone' => 1234567890,
                'password' => Hash::make('password'),
                'gender' => 'Female',
                'dob' => "1999-12-26",
                'address' => Str::random(10),
                
            ]);
    }


}
}
