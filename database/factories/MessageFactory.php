<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'     => $this->faker->name(),
            'email'   => $this->faker->unique()->safeEmail(),
            'sujet'   => $this->faker->sentence(3), 
            'message' => $this->faker->paragraph(2),
        ];
    }
}
