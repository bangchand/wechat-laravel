<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'Test User',
            'email' => 'user1@example.com',
            'password' => bcrypt('password'),
        ]);

        $user2 = User::create([
            'name' => 'Test User',
            'email' => 'user2@example.com',
            'password' => bcrypt('password'),
        ]);

        $chat = Chat::create([
            'uuid' => (string) Str::uuid(),
            'name' => 'chat',
            'type' => 'private'
        ]);

        $chat->participants()->attach([$user1->id, $user2->id]);
    }
}
