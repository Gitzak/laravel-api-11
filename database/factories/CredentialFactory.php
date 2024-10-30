<?php

namespace Database\Factories;

use App\Enums\CredentialType;
use App\Models\Credential;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Credential>
 */
class CredentialFactory extends Factory
{

    protected $model = Credential::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'type' => [
                'type' => CredentialType::Bearer_auth,
                'prefix' => 'Bearer'
            ],
            'value' => $this->faker->sentence(),
            // 'metadata' => $this->faker->sentence(),
            'user_id' => User::factory(),
        ];
    }
}
