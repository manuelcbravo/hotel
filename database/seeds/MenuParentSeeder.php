<?php

use Illuminate\Database\Seeder;

class MenuParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menu_parents')->delete();
        
        \DB::table('menu_parents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Configuración',
                'icon' => 'bi bi-sliders',
                'ruta' => NULL,
                'roles' => '0',
                'enabled' => 1,
                'order' => 100,
            ),
            1 => 
            array (
                'id' => 3,
                'nombre' => 'Hotel',
                'icon' => 'bi bi-building',
                'ruta' => NULL,
                'roles' => '0,1',
                'enabled' => 1,
                'order' => 4,
            ),
            2 => 
            array (
                'id' => 4,
                'nombre' => 'Recepción',
                'icon' => 'bi bi-shop',
                'ruta' => NULL,
                'roles' => '0,1',
                'enabled' => 1,
                'order' => 3,
            ),
        ));
        
    }
}
