<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductofactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
     * @return array
     */
    private $model = Producto::class;
    public function definition()
    {
        return [
            "Producto"=>$this->faker()->name(),
            "Estado"=>$this->faker()->name(),
            "Agregado"=>"activo",
            "Precio"=>200,
            "create_at"=>now(),
            "update_at"=>now(),
        ];
    }
}
