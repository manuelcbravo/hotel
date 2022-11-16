<?php

namespace Database\Seeders;

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
                'name' => 'manuel',
                'apellidos' => 'bravo',
                'activado' => 1,
                'visto' => 1,
                'rol' => 0,
                'email' => 'admin@fielgroup.com.mx',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BF8YndfJBynr3MQuh1IZmOC8ae9uNt5SjTzg2eNgNGSKJgpi.nHeO',
                'password_plain' => '12345678',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}