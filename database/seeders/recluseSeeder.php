<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class recluseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recluses')->insert([
        'type_document_id' => 'CC',
        'document' => '101245687',
        'code_recluse' => 'D0125',
        'Sex' => 'Hombre',
        'name_recluse' => 'JUAN CARLOS',
        'surname_recluse' => 'PRUEBA PRUEBA',
        'pavilions_id' => 'Pabelló 1',
        'jailcells' => '102',
        'state' => 'Activo',
        'user_create_id' => '1',
        ]);

    }
}
