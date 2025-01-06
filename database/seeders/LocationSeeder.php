<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['D6','A8','B3','C1','D5','A1','D4','B4','B1','B2'] as $obj){
            Location::create([
                'name'=>$obj,
                'parent_id'=>$parentLocationId,
            ]);
        }
    }
}
