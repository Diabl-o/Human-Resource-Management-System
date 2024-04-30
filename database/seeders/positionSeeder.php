<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class positionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json=File::get(path:'database/json/position.json');

        $types=collect(json_decode($json));

        $types->each(function ($type){
            Position::create([
                'position'=>$type->position
            ]);
        });
    }
}
