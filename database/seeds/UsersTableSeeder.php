<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Fiel',
                'apellidos' => 'Group',
                'genero' => 1,
                'fecha_nacimiento' => '1997-10-05',
                'telefono' => NULL,
            'celular' => '(771)281-5742',
                'calle' => 'Real de Guadalupe',
                'calle_num' => '117',
                'id_asenta' => 3455,
                'cp' => '42086',
                'id_estado' => 13,
                'id_municipio' => 48,
                'email' => 'admin@fielgroup.com.mx',
                'email_verified_at' => '2021-01-27 13:01:31',
                'password' => '$2y$10$ynvJou.Mz8ZBTVaXSeLUeesk8IyV2crhOlAI6sI63xx6RhzRDYgIS',
                'password_plain' => 'secret',
                'avatar' => '$2y$10$8ILhPBQb5vfc586JVij0Je7BIVcldR8iH9RtN1cBqtJIGbWgl4AmG.png',
                'rol' => 0,
                'estatus' => 1,
                'visto' => 0,
                'actividades' => 0,
                'id_agencia' => 0,
                'deleted_at' => NULL,
                'remember_token' => '9GsAkS4F6k88JeD6lrFgNbszqd1CBDH2LLT6tHMa1bK6KqqBsPmdifmJvuDn',
                'created_at' => '2021-01-27 13:01:31',
                'updated_at' => '2021-11-03 10:33:07',
            ),
        ));
        
        
    }
}