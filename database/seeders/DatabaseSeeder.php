<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
   
    public function run()
    {
        \App\Models\User::factory(10)->create();
       // \App\Models\Producto::factory(10)->create();
        /*$base = new Producto();
        $base->Producto("Medias");
        $base->Estado("Activo");
        $base->Precio("1200");
        $base->save();*/
    }
}
