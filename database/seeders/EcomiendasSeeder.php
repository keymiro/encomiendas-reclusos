<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class EcomiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ecomiendas')->insert([
            'cod' => 'P1-0000000001',
            'recluse_id' => '1',
            'user_send_id' => '1',
            'user_create_id' => '1',
        ]);
    }
}

