<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'id' => 1,
            'first_name' => 'Subinam ',
            'last_name'=> 'Dangal',
            'email' => 'dangalsubinam@gmail.com',
            'password' => Hash::make('Subinam@123'),
            'position_id'=>1,
            'blood_group_id'=>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        

    }
}
