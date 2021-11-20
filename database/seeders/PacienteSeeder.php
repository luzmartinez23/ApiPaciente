<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
            'nombres' => 'Joel',
            'apellidos' => 'Martinez',
            'edad' => '25',
            'sexo' => 'masculino',
            'ci' => '10652892',
            'tipo_sangre' => 'OR+',
            'correo' => 'joel@gmail.com',
            'telefono'=> '76819292',
            'direccion'=>'Barrio san juan'
        ],
        [
            'nombres' => 'Roberta',
            'apellidos' => 'Gomez',
            'edad' => '20',
            'sexo' => 'Femenino',
            'ci' => '10292321',
            'tipo_sangre' => 'OR+',
            'correo' => 'roberta@gmail.com',
            'telefono'=> '76823728',
            'direccion'=>'Barrio la Cruz'
        ],
        [
            'nombres' => 'Felipe',
            'apellidos' => 'Molina ',
            'edad' => '30',
            'sexo' => 'Masculino',
            'ci' => '18392392',
            'tipo_sangre' => 'AB-',
            'correo' => 'felipe@gmail.com',
            'telefono'=> '76810292',
            'direccion'=>'barrio 27 de mayo'
        ]
        ,
        [
            'nombres' => 'Luz',
            'apellidos' => 'Orellana ',
            'edad' => '20',
            'sexo' => 'femenino',
            'ci' => '10328293',
            'tipo_sangre' => 'OR+',
            'correo' => 'luz@gmail.com',
            'telefono'=> '76821231',
            'direccion'=>'Barrio jardin'
        ],
        
        ]);
    }
}
