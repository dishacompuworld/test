<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\city;
use Illuminate\Support\Facades\File;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Json File
        $json = File::get(path:'database/json/city.json');
        $cities=collect(json_decode($json));

        
        $cities->each(function($city){
            city::create([
                'id'=> $city->id,
                'name' => $city->name,
                'state' => $city->state,
            ]);

        });


    }
}
