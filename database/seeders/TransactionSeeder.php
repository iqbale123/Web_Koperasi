<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'product_id'=> 1,
            'user_id'=> 1,
            'invoice_code' => '#34342',
            'quantity'=> 1,
            'status'=> 'unpaid',
            'bukti' => 'transaksi.png'
        ]);

        Transaction::create([
            'product_id'=> 1,
            'user_id'=> 2,
            'invoice_code' => '#34345',
            'quantity'=> 2,
            'status'=> 'unpaid',
            'bukti' => 'transaksi1.png'
        ]);

        Transaction::create([
            'product_id'=> 2,
            'user_id'=> 3,
            'invoice_code' => '#34349',
            'quantity'=> 5,
            'status'=> 'unpaid',
            'bukti' => 'transaksi2.png'
        ]);
    }
}
