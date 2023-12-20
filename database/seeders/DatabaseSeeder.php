<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Admin User',
        //     'username' => 'adminsatu',
        //     'email' => 'adminrentit@gmail.com',
        //     'nim' => '1234567890',
        //     'email_verified_at' => now(),
        //     'password' => 'password', // password
        //     'isAdmin' => true,
        //     // 'remember_token' => Str::random(10)
        // ]);

        $this->call(FacilitySeeder::class);
        $this->call(KelasSeeder::class);
    }
}
