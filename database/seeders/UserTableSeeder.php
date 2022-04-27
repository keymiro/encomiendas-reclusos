<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'document'        =>'123456789',
            'names'           =>'Super Admin',
            'lastnames'     =>'Super Admin',
            'email'           =>'superadmin@gmail.com',
            'password'        => Hash::make('12345678'),
            'rol'            =>'super-admin',
            'state'           =>'1',
        ]);

    }
}
