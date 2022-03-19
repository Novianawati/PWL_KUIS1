<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
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
                'nama' => 'Nike - Af1 Crater Flyknit',
                'deskripsi' => 'Terbaik untuk gaya hidup, Sepatu kets berlogo midsole bertekstur,
                Upper flyknit dan sintetis',
                'harga' => 'Rp 1.484.100'
            ],
            [
                'nama' => 'Adidas - ZX 2K BOOST PURE',
                'deskripsi' => 'Menggunakan tali sepatu, Upper berbahan tekstil, Midsole Boost',
                'harga' => 'Rp 1.430.000'
            ],
            [
                'nama' => 'Puma - Puma Sportstyle Prime Rs-2K Messaging Shoes',
                'deskripsi' => 'Terbaik untuk gaya hidup, Sepatu kasual multi-warna, Pengikat renda',
                'harga' => 'Rp 949.500'
            ],
            [
                'nama' => 'Fila - Favo',
                'deskripsi' => 'Lifestyle sneakers berwarna solid untuk gaya urban timeless, Warna navy, Jari almond',
                'harga' => 'Rp 419.930'
            ],
            [
                'nama' => 'Converse - Chuck Taylor 70s - Ox',
                'deskripsi' => 'Sepatu sneakers bernuansa dual tone dengan detail eyelet, Warna hitam, Kanvas atas, Produk unisex',
                'harga' => 'Rp 799.200'
            ]
        ];
        DB::table('barangs')->insert($data);
    }
}
