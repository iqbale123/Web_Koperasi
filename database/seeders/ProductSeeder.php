<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=> 'Seragam Batik Lengan Panjang',
            'price'=> 130000,
            'thumbnail'=> 'batikpanjang.png',
            'ukuran'=> 'XXL'
        ]);

        Product::create([
            'name'=> 'Seragam Batik Lengan Pendek',
            'price'=> 125000,
            'thumbnail'=> 'batikpendek.png',
            'ukuran'=> 'XL'
        ]);

        Product::create([
            'name'=> 'Seragam Olahraga Lengan Pendek',
            'price'=> 150000,
            'thumbnail'=> 'olahragapendek.png',
            'ukuran'=> 'XXL'
        ]);

        Product::create([
            'name'=> 'Topi',
            'price'=> 31000,
            'thumbnail'=> 'topi.png',
            'ukuran'=> 'allsize'
        ]);

        Product::create([
            'name'=> 'Dasi',
            'price'=> 31000,
            'thumbnail'=> 'dasi.png',
            'ukuran'=> 'allsize'
        ]);

        Product::create([
            'name'=> 'Gesper',
            'price'=> 31000,
            'thumbnail'=> 'gesper.png',
            'ukuran'=> 'allsize'
        ]);
    }
}
