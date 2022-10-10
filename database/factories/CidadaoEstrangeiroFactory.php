<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CidadaoEstrangeiroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->name,
            'nacionalidade'=>$this->faker->city,
            'nome_pai'=>$this->faker->firstNameMale,
            'nome_mae'=>$this->faker->firstNameFemale,
            'num_passporte'=>$this->faker->numberBetween(5221, 11575),
            'num_registo'=>$this->faker->numberBetween(300, 1000),
            'data_emissao'=>$this->faker->dateTime,
            'data_caducidade'=>$this->faker->dateTime,
            'local_residente'=>$this->faker->secondaryAddress,
            'visto'=>rand(1, 3),
        ];
    }
}
