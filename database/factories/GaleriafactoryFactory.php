<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Galeria>
 */
class GaleriafactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->fake()->text(),
            'categoria_id' => $this->fake()->numberBetween(1, 10),
            'titulo' => $this->fake()->sentence(),
            'descripcion' => $this->fake()->text(),
            'imagen' => randomImage(),
            'estado' => "1",
            'registradoPor' => \App\Models\User::factory(),

            
        ];
    }
    function randomImage(): string
    {
    return "dummyImage/" . rand(1, 15) . ".jpg";
    }
}
