<?php

use Illuminate\Database\Seeder;

class MenuParentChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menu_parent_childrens')->delete();
        
        \DB::table('menu_parent_childrens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_parent_id' => 1,
                'nombre' => 'Mi cuenta',
                'ruta' => 'mi_cuenta',
                'roles' => '0',
                'enabled' => 1,
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_parent_id' => 1,
                'nombre' => 'Usuarios',
                'ruta' => 'usuarios',
                'roles' => '0',
                'enabled' => 1,
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_parent_id' => 3,
                'nombre' => 'Hotel
',
                'ruta' => 'admin_hotel',
                'roles' => '0,1',
                'enabled' => 1,
                'order' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_parent_id' => 3,
                'nombre' => 'Habitaciones
',
                'ruta' => 'admin_habitaciones',
                'roles' => '0,1',
                'enabled' => 1,
                'order' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_parent_id' => 3,
                'nombre' => 'Tipo habitaciones
',
                'ruta' => 'admin_tipo_hotel',
                'roles' => '0,1',
                'enabled' => 1,
                'order' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_parent_id' => 4,
                'nombre' => 'Reservaciones',
                'ruta' => 'recep_reservaciones',
                'roles' => '0,1',
                'enabled' => 1,
                'order' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_parent_id' => 4,
                'nombre' => 'Historico',
                'ruta' => 'recep_historico',
                'roles' => '0,1',
                'enabled' => 1,
                'order' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_parent_id' => 4,
                'nombre' => 'Lista reservación',
                'ruta' => 'recep_lista',
                'roles' => '0,1',
                'enabled' => 1,
                'order' => 2,
            ),
        ));
    }
}
