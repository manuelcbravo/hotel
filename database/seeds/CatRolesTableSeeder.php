<?php

use Illuminate\Database\Seeder;

class CatRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cat_roles')->delete();
        
        \DB::table('cat_roles')->insert(array (
            0 => 
            array (
                'id' => 0,
                'nombre' => 'Desarrollo',
                'descripcion' => 'admon',
                'created_at' => '2021-01-27 13:01:32',
                'updated_at' => '2021-01-27 13:01:32',
            ),
            1 => 
            array (
                'id' => 1,
                'nombre' => 'Administrador',
                'descripcion' => 'admon',
                'created_at' => '2021-01-27 13:01:32',
                'updated_at' => '2021-01-27 13:01:32',
            ),
            2 => 
            array (
                'id' => 2,
                'nombre' => 'Recepcionista',
                'descripcion' => 'Gerente',
                'created_at' => '2021-01-27 13:01:32',
                'updated_at' => '2021-01-27 13:01:32',
            ),
            3 => 
            array (
                'id' => 3,
                'nombre' => 'Gerente general',
                'descripcion' => 'Gerente',
                'created_at' => '2021-01-27 13:01:32',
                'updated_at' => '2021-01-27 13:01:32',
            ),
            4 => 
            array (
                'id' => 4,
                'nombre' => 'Consulta',
                'descripcion' => 'Gerente',
                'created_at' => '2021-01-27 13:01:32',
                'updated_at' => '2021-01-27 13:01:32',
            )
        ));
        
        
    }
}