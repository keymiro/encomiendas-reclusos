<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PavilionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pavilions')->insert([
            'namepavilions'        =>'Pabellón 1',
            'idusercreate' => '1',
            'state' => '1',
        ]);
        DB::table('pavilions')->insert([
        'namepavilions'        =>'Pabellón 2',
        'idusercreate' => '1',
        'state' => '1',
        ]);
        DB::table('pavilions')->insert([
        'namepavilions'        =>'Pabellón 3',
        'idusercreate' => '1',
        'state' => '1',
        ]);
        DB::table('pavilions')->insert([
            'namepavilions'        =>'Pabellón 4',
            'idusercreate' => '1',
            'state' => '1',
        ]);
        DB::table('pavilions')->insert([
        'namepavilions'        =>'Pabellón 5',
        'idusercreate' => '1',
        'state' => '1',
        ]);
        DB::table('pavilions')->insert([
        'namepavilions'        =>'Pabellón 6',
        'idusercreate' => '1',
        'state' => '1',
        ]);
        DB::table('pavilions')->insert([
            'namepavilions'        =>'Pabellón 7',
            'idusercreate' => '1',
            'state' => '1',
            ]);
    }
}
