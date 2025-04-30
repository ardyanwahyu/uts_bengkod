<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Obat::insert([
            ['nama_obat' => 'Paracetamol', 'kemasan' => 'Tablet', 'harga' => 5000],
            ['nama_obat' => 'Amoxicillin', 'kemasan' => 'Kapsul', 'harga' => 10000],
            ['nama_obat' => 'Ibuprofen', 'kemasan' => 'Tablet', 'harga' => 8000],
        ]);
    }
}
