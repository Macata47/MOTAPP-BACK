<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;

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
            'name' => "Marta Parra",
            'email'=>"martaparra@gmail.com",
            'password'=>bcrypt('12345678'),
        ])->assignRole('Admin');
        
        // User::factory()->count(10)->create();
    }
}


