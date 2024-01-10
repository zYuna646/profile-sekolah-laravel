<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = [
            [
                'name' => 'Admin',
                'email' => 'adminsekolah123@gmail.com',
                'password' => Hash::make('admin12345'),
                'role' => 'admin'
            ], [
                'name' => 'Guru',
                'email' => 'gurusekolah123@gmail.com',
                'password' => Hash::make('guru12345'),
                'role' => 'guru'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
