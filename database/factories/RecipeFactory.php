<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(1, 6)),  
            'slug' => $this->faker->slug(),
            'description'=> $this->faker->sentence(mt_rand(10, 25)),
            'body' => $this->generateStepByStep(),
            'user_id'=> mt_rand(1,4),
            'category_id' => mt_rand(1,6)
        ];
    }

    protected function generateStepByStep(): string
    {
        $steps = [];
        $numSteps = mt_rand(5, 10);

        for ($i = 1; $i <= $numSteps; $i++) {
            $steps[] = "<li><i>Step {$i}</i>: " . $this->faker->sentence(mt_rand(8, 20)) . "</li>";
        }

        return "<ul>" . implode("", $steps) . "</ul>";
    }
}
