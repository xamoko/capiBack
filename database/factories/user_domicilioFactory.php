<?php

namespace Database\Factories;

use App\Models\user_domicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class user_domicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = user_domicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            //'user_id' => $this->faker->user_id(),
            'domicilio' => $this->faker->address(),
            'numero_exterior' => $this->faker->buildingNumber(),
            'colonia' => $this->faker->citySuffix(),
            'cp' => $this->faker->postcode(),
            'ciudad' => $this->faker->city(),
            'fecha_nacimiento' => $this->faker->date()
        ];
    }
}
