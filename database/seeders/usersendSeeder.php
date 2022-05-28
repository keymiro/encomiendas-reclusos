<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_sends')->insert([
            'type_document_send_id' => 'CC',
            'document_send' => '111846889',
            'name_send' => 'PEDO ALEJANDRO',
            'surname_send' => 'RUIZ RUIZ',
            'email_send' => 'PEDRO@GMAIL.COM',
            'cellphone_send' => '3184925697',
            'phone_send' => '0688956235',
            'user_create_id' => '1',
            'state' => 'Activo',
        ]);
    }
}
