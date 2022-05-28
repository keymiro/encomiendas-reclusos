<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemsEcomiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_ecomiendas')->insert([
            'ecomiendas_id' => '1',
            'item' => 'Papel higiénico',
            'count' => '6',
            'Description' => 'Paquete de sixpack de papel higiénico, se revisa cada uno',
            'state' => 'Aceptado',
            'user_create_id' => '1',
        ]);
        DB::table('items_ecomiendas')->insert([
            'ecomiendas_id' => '1',
            'item' => 'Crema dental',
            'count' => '6',
            'Description' => 'Paquete de sixpack de crema dental, se revisa cada uno',
            'state' => 'Aceptado',
            'user_create_id' => '1',
        ]);
        DB::table('items_ecomiendas')->insert([
            'ecomiendas_id' => '1',
            'item' => 'jabon de baño',
            'count' => '2',
            'Description' => 'se revisa paquete de jabon de baño y no pasa criterio por su presentación',
            'state' => 'Devolucion',
            'user_create_id' => '1',
            'user_edit_id' => '1',
        ]);
    }
}


