<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Piloto>
 */
class PilotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->name(),
            'fecha_nacimento' => fake()->date(),
            'numero_licencia' => fake()->string(),
            'victorias' => fake()->string(),
            'escuderia_id' => fake()->string(),
            
        ];
    }
}
