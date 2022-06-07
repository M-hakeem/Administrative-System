<?php

namespace Database\Seeders;

use App\Models\Distributor;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'firstname' => 'mohammed',
            'lastname' => 'abdulhakeem',
            'email' => 'mohammedabdulhakeem5@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'Super',
        ]);

        Staff::factory(20)->create([
            'user_id' => $user
        ]);

        Distributor::factory(20)->create([
            'user_id' => $user
        ]);
    }
}
