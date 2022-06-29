<?php

namespace Database\Factories;

use App\Models\Mapeo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MapeoFactory extends Factory
{
    protected $model = Mapeo::class;

    public function definition()
    {
        return [
			'multimedial_id' => $this->faker->name,
			'nodo' => $this->faker->name,
			'descripcion' => $this->faker->name,
			'plantilla' => $this->faker->name,
        ];
    }
}
