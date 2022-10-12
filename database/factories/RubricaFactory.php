<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RubricaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'surname'=>$this->faker->name('surname'),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' =>$this->faker->phoneNumber(),
          
          
        ];
    }

}
