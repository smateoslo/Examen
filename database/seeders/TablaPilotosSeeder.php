<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TablaPilotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pilotos')->insert([
            'nombre' => 'Fernando',
            'fecha_nacimento' => '1980-08-13',
            'numero_licencia' => '111',
            'victorias' => '20',
            'escuderia_id' => '1',
            ]);
            DB::table('pilotos')->insert([
                'nombre' => 'Kimi',
                'fecha_nacimento' => '1985-09-23',
                'numero_licencia' => '222',
                'victorias' => '5',
                'escuderia_id' => '2',
                ]);
                DB::table('pilotos')->insert([
                    'nombre' => 'Mark',
                    'fecha_nacimento' => '1990-02-03',
                    'numero_licencia' => '333',
                    'victorias' => '22',
                    'escuderia_id' => '3',
                    ]);
                    DB::table('pilotos')->insert([
                        'nombre' => 'Jhon',
                        'fecha_nacimento' => '1982-01-17',
                        'numero_licencia' => '444',
                        'victorias' => '10',
                        'escuderia_id' => '4',
                        ]);


                        DB::table('escuderias')->insert([
                            'nombre' => 'Ferrari',
                            'fecha_creacion' => '1960-01-17',
                            'num_pilotos' => '10',
                            'sobre_presupuesto' => '1',
                            ]);
                            DB::table('escuderias')->insert([
                                'nombre' => 'RedBull',
                                'fecha_creacion' => '1990-01-17',
                                'num_pilotos' => '5',
                                'sobre_presupuesto' => '0',
                                ]);
    
    
                               
    }
}
