<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	$this->call([
	        PeliculaSeeder::class,
	    ]);

        // \App\Models\User::factory(10)->create();
        self::seedUsers();
        $this->command->info('Tabla catálogo inicializada con datos!');
    }

    private static function seedUsers()
    {
    	User::truncate();
    	$usuario1 = new User();
    	$usuario1->name = 'Alberto';
    	$usuario1->email = 'alberto.sierra@murciaeduca.es';
    	$usuario1->password = bcrypt('12345678');
    	$usuario1->save();

    	$usuario2 = User::create([
    		'name' => 'Otro usuario',
    		'email' => 'otroUsuario@murciaeduca.es',
    		'password' => bcrypt('otroUsuario'),
    	]);

    }

}
