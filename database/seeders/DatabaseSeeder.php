<?php

namespace Database\Seeders;

use App\Models\Check;
use App\Models\Service;
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
        // User::factory(10)->create();

        $user = User::factory()->create(['email' => 'steve@treblle.com']);

        // Service::factory()->count(1000)->create(['user_id' => $user->id]);

        $service = Service::factory()->for($user)->create([
            'name' => 'Treblle API',
            'url' => 'https://api.treblle.com'
        ]);

        Check::factory()->for($service)->count(25)->create();

    }
}
