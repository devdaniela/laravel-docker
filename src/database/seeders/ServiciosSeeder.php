<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicios = [
            ['name' => 'Netflix'],
            ['name' => 'Fibertel'],
            ['name' => 'Telefonia Claro'],
            ['name' => 'Video Juego Candy Crush'],
            ['name' => 'Publicidad Digital de Facebook'],
            ['name' => 'Publicidad Digital de Instagram']          
        ];
        
        \DB::table('servicios')->insert($servicios);
    }
}
