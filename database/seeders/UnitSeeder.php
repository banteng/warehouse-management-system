<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $satuanBarang = [
            ['unit_name' => 'Kilogram', 'symbol' => 'kg'],
            ['unit_name' => 'Gram', 'symbol' => 'g'],
            ['unit_name' => 'Ton', 'symbol' => 'ton'],
            ['unit_name' => 'Ons', 'symbol' => 'oz'],
            ['unit_name' => 'Unit', 'symbol' => 'unit'],
            ['unit_name' => 'Liter', 'symbol' => 'L'],
            ['unit_name' => 'Mililiter', 'symbol' => 'ml'],
            ['unit_name' => 'Buah', 'symbol' => 'buah'],
            ['unit_name' => 'Dus', 'symbol' => 'dus'],
            ['unit_name' => 'Lusin', 'symbol' => 'lusin'],
            ['unit_name' => 'Kardus', 'symbol' => 'kardus'],
            // Tambahkan jenis satuan lainnya sesuai kebutuhan Anda
        ];

        foreach ($satuanBarang as $satuan) {
            DB::table('units')->insert($satuan);
        }


    }
}
