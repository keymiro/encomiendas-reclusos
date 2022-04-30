<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TypeDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typedocs')->insert([
            'typedoc'        =>'TI',
        ]);
        DB::table('typedocs')->insert([
        'typedoc'        =>'CC',
        ]);
        DB::table('typedocs')->insert([
        'typedoc'        =>'CE',
        ]);
    }
}
