<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Azka uluwiyah',
                'gender' => 'L',
                'Address' => 'Prigen',
                'telp' => '085790813851'
            ],
            [
                'name' => 'Novianawati',
                'gender' => 'P',
                'Address' => 'Kertosari',
                'telp' => '08883115560'
            ],
            [
                'name' => 'Naila indah',
                'gender' => 'P',
                'Address' => 'Bandung',
                'telp' => '081791213822'
            ],
            [
                'name' => 'Novan satria',
                'gender' => 'L',
                'Address' => 'Singosari',
                'telp' => '082490899853'
            ],
            [
                'name' => 'Raihan Solon Saputra',
                'gender' => 'L',
                'Address' => 'Jakarta',
                'telp' => '085981113800'
            ]
        ];
        DB::table('pegawais')->insert($data);
    }
}
