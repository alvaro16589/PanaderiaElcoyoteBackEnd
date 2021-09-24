<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->company,
            'estado' => 'activo',//$this->faker->randomElement(['activo','inactivo']),
            'imagen' => 'assets/image/bal.jpg',
            'descripcion' => $this->faker->text,
            'cantidad' => $this->faker->numberBetween($min = 1, $max = 100),
            'idtipo' => $this->faker->numberBetween($min = 1, $max = 4),
            'idprecio' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
