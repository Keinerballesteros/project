<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Categories>
 */
class CategoriesfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->text(),
            'titulo' => $this->faker->sentence(),
            'estado' => "1",
            'registradoPor' => \App\Models\User::factory(),
        ];
    }
}
