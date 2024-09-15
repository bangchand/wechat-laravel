<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'user1@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'user2@example.com',
            'password' => bcrypt('password'),
        ]);

        Conversation::create([
            'user1_id' => '1',
            'user2_id' => '2'
        ]);
    }
}
