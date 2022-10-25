<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kelas::create([
            'name'=> 'X-BDP1'
        ]);

        Kelas::create([
            'name'=> 'X-BDP2'
        ]);

        kelas::create([
            'name'=> 'X-OTKP1'
        ]);

        kelas::create([
            'name'=> 'X-OTKP2'
        ]);

        kelas::create([
            'name'=> 'X-AKL1'
        ]);

        kelas::create([
            'name'=> 'X-AKL2'
        ]);

        kelas::create([
            'name'=> 'X-RPL'
        ]);

        kelas::create([
            'name'=> 'XI-BDP1'
        ]);

        Kelas::create([
            'name'=> 'XI-BDP2'
        ]);

        kelas::create([
            'name'=> 'XI-OTKP1'
        ]);

        kelas::create([
            'name'=> 'XI-OTKP2'
        ]);

        kelas::create([
            'name'=> 'XI-AKL1'
        ]);

        kelas::create([
            'name'=> 'XI-AKL2'
        ]);

        kelas::create([
            'name'=> 'XI-RPL'
        ]);

        kelas::create([
            'name'=> 'XII-BDP1'
        ]);

        Kelas::create([
            'name'=> 'XII-BDP2'
        ]);

        kelas::create([
            'name'=> 'XII-OTKP1'
        ]);

        kelas::create([
            'name'=> 'XII-OTKP2'
        ]);

        kelas::create([
            'name'=> 'XII-AKL1'
        ]);

        kelas::create([
            'name'=> 'XII-AKL2'
        ]);

        kelas::create([
            'name'=> 'XII-RPL'
        ]);
    }
}
