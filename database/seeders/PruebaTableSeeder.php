<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prueba;

class PruebaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Prueba::truncate();
        $prueba = new Prueba;
        $prueba->nombre = 'Mario';
        $prueba->votos = 2;
        $prueba->email = 'mario301298@gmail.com';
        $prueba->save();
    }
}
