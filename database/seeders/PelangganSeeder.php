<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $data = [
                [
                    'nama' => 'M. Robfad Nur Ardiansyah',
                    'alamat' => 'Blitar',
                    'noHp' => '085112369662'
                ],
                [
                    'nama' => 'Nikita Indrianingsih',
                    'alamat' => 'Malang',
                    'noHp' => '085553366489'
                ],
                [
                    'nama' => 'Dilan Nugroho Cahyo',
                    'alamat' => 'Pasuruan',
                    'noHp' => '08883115637'
                ],
                [
                    'nama' => 'Mia Intan Purnamasari',
                    'alamat' => 'Pasuruan',
                    'noHp' => '0852423993771'
                ],
                [
                    'nama' => 'M. Alshad Syaifuddin',
                    'alamat' => 'Malang',
                    'noHp' => '085672869229'
                ]
            ];
            DB::table('pelanggans')->insert($data);
        }
    }
}