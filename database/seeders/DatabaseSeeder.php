<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
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

        // \App\Models\User::create([
        //     'name' => 'Muhammad Risjad Shidqi Febian',
        //     'username' => 'rasjidzz',
        //     'email' => 'risjad@gmail.com',
        //     'nim' => '1302213045',
        //     'password' => bcrypt('password'),
        //     'isAdmin' => 0,
        // ]);
        // \App\Models\User::create([
        //     'name' => 'Asep Junaedi',
        //     'username' => 'asep',
        //     'email' => 'adminasep@gmail.com',
        //     'nim' => '10010010',
        //     'password' => bcrypt('password'),
        //     'isAdmin' => 1,
        // ]);

        Category::create([
            'name' => 'Classes',
            'slug' => 'classes'
        ]);
        Category::create([
            'name' => 'Buildings',
            'slug' => 'buildings'
        ]);
        Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);

        $this->call(FacilitySeeder::class);
        $this->call(KelasSeeder::class);
    }
}
