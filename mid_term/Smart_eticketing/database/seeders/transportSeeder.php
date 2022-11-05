<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class transportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        foreach (range(1,100) as $index){
            DB::table('transports')->insert([
            'transport_name' => Str::random(5),
            'transport_type' => Str::random(10),
            'route_from' => Str::random(5),
            'route_to' => Str::random(5),
            'transport_date' => "2022-11-10",

            ]);
        }
        
    }
}
