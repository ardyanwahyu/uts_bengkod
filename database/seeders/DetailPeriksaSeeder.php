<?php

namespace Database\Seeders;

use App\Models\DetailPeriksa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailPeriksa::insert([
            ['id_periksa' => 1, 'id_obat' => 1], // Paracetamol untuk periksa ID 1
            ['id_periksa' => 1, 'id_obat' => 2], // Amoxicillin untuk periksa ID 1
        ]);
    }
}
