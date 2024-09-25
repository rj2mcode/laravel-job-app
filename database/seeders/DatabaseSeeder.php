<?php

namespace Database\Seeders;

use App\Models\laraJob;
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
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // User::factory(10)->create();
        laraJob::factory(10)->create([
            'user_id' => $user->id
        ]);


    }
}
