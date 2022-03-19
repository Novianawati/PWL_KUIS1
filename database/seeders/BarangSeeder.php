<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = [
            [
                'nama' => 'Nike - Af1 Crater Flyknit',
                'deskripsi' => '- Terbaik untuk gaya hidup
                - Sepatu kets berlogo midsole bertekstur
                - Upper flyknit dan sintetis
                - Insole tekstil
                - Outsole karet
                - Bantalan busa kawah',
                'harga' => 'Rp 1.484.100'
            ],
            [
                'nama' => 'Adidas - ZX 2K BOOST PURE',
                'deskripsi' => '- Menggunakan tali sepatu
                - Upper berbahan tekstil
                - Outsole berbahan karet
                - Midsole Boost',
                'harga' => 'Rp 1.430.000'
            ],
            [
                'nama' => 'Puma - Puma Sportstyle Prime Rs-2K Messaging Shoes',
                'deskripsi' => '- Terbaik untuk gaya hidup
                - Sepatu kasual multi-warna
                - Upper berbahan mesh/sintetis/tekstil
                - Insole tekstil
                - Outsole karet
                - Jari kaki bulat
                - Pengikat renda',
                'harga' => 'Rp 949.500'
            ],
            [
                'nama' => 'Fila - Favo',
                'deskripsi' => '- Lifestyle sneakers berwarna solid untuk gaya urban timeless
                - Warna navy
                - Bagian atas PU
                - Sol tekstil
                - Outsole karet
                - Tali depan
                - Jari almond',
                'harga' => 'Rp 419.930'
            ],
            [
                'nama' => 'Converse - Chuck Taylor 70s - Ox',
                'deskripsi' => '- Sepatu sneakers bernuansa dual tone dengan detail eyelet
                - Warna hitam
                - Kanvas atas
                - Sol tekstil
                - Outsole karet
                - Detail tali depan
                - Jari kaki bulat
                - Produk unisex',
                'harga' => 'Rp 799.200'
            ]
        ];
    }
}
