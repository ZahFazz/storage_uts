<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangInput extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            'kodeBarang' => '11111111112',
            'namaBarang'=>'Fanta',
            'kategoriBarang'=>'Beverages',
            'harga'=>7500,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '11111111113',
            'namaBarang'=>'Sprite',
            'kategoriBarang'=>'Beverages',
            'harga'=>7500,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '11111111114',
            'namaBarang'=>'greenfield',
            'kategoriBarang'=>'Beverages',
            'harga'=>7500,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '11111111115',
            'namaBarang'=>'Milo',
            'kategoriBarang'=>'Beverages',
            'harga'=>7500,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '11111111116',
            'namaBarang'=>'Milo',
            'kategoriBarang'=>'Beverages',
            'harga'=>7500,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '11111111117',
            'namaBarang'=>'Yakult',
            'kategoriBarang'=>'Beverages',
            'harga'=>7500,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '11111111118',
            'namaBarang'=>'Coca cola',
            'kategoriBarang'=>'Beverages',
            'harga'=>7500,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '11111111119',
            'namaBarang'=>'AW',
            'kategoriBarang'=>'Beverages',
            'harga'=>7500,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '22222222221',
            'namaBarang'=>'TV',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '22222222222',
            'namaBarang'=>'TV',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '22222222223',
            'namaBarang'=>'Radio',
            'kategoriBarang'=>'Elecronic',
            'harga'=>5500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '22222222224',
            'namaBarang'=>'TV',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '22222222225',
            'namaBarang'=>'Kipas angin',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '22222222227',
            'namaBarang'=>'TV',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '22222222226',
            'namaBarang'=>'Speaker',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '22222222210',
            'namaBarang'=>'Oven',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '22222222211',
            'namaBarang'=>'Rice Cooker',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '222222222212',
            'namaBarang'=>'water Dispenser',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '222222222134',
            'namaBarang'=>'Lemari Pendingin',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '222222222132',
            'namaBarang'=>'Blender/Juice',
            'kategoriBarang'=>'Elecronic',
            'harga'=>7500000,
            'qty'=>80
        ]);

        DB::table('barang')->insert([
            'kodeBarang' => '1222222222111',
            'namaBarang'=>'pajama',
            'kategoriBarang'=>'outfit',
            'harga'=>1500000,
            'qty'=>80
        ]);

        
        DB::table('barang')->insert([
            'kodeBarang' => '22222222221001',
            'namaBarang'=>'T-shirt',
            'kategoriBarang'=>'outfit',
            'harga'=>1500000,
            'qty'=>80
        ]);

        
        DB::table('barang')->insert([
            'kodeBarang' => '222222222212100',
            'namaBarang'=>'hat',
            'kategoriBarang'=>'outfit',
            'harga'=>1500000,
            'qty'=>80
        ]);

        
       
    }
}
