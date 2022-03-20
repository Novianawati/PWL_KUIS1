<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablesupplierSeeder extends Seeder
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
                'namesupplier' => 'PT Indo',
                'Address' => 'Malang',
                'telp' => '085790855367'
            ],
            [
                'namesupplier' => 'PT Abadi Indah',
                'Address' => 'Malang',
                'telp' => '08997545522'
            ],
            [
                'namesupplier' => 'CV Sinar Tours',
                'Address' => 'Jakarta',
                'telp' => '081794752976'
            ],
            [
                'namesupplier' => 'PT Dunia Kita',
                'Address' => 'Magelang',
                'telp' => '082796035673'
            ],
            [
                'namesupplier' => 'PT 4 Bersaudara',
                'Address' => 'Sidoarjo',
                'telp' => '08596809936'
            ]
        ];
        DB::table('tablesuppliers')->insert($data);
    }
}
