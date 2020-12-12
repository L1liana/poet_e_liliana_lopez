<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class insertar_usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poet')->insert([
            'First_name' => 'Liliana',
            'Surname' => 'liii',
            'Address' => 'kkk',
            'Postcode' => 'lñmknjhgfdf',
            'Telephone_number' => 'lñmknjhgfdf'
        ]);

    }
}
