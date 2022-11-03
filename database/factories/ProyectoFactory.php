<?php

namespace Database\Factories;

use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProyectoFactory extends Factory
{
    protected $model = Proyecto::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'titulo' => $this->faker->name,
			'descripcion' => $this->faker->name,
			'etapa' => $this->faker->name,
        ];
    }
}
