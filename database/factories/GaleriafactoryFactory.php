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
            'id' => $this->faker->text(),
            'categoria_id' => $this->faker->numberBetween(1, 10),
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->text(),
            'imagen' =>$this -> randomImage(),
            'estado' => "1",
            'registradoPor' => \App\Models\User::factory(),

            
        ];
    }
    function randomImage(): string
    {
    return "public/" . rand(1, max: 15) . ".jpg";
    }
}
