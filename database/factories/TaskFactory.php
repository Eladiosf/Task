<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Le decimos a la Factoria que vamos a crear datos falsos
        return [
            'name'=>$this->faker->sentence,
            'description'=> $this->faker->paragraph,
            'completed'=> $this->faker->boolean,
        ];
    }
}
