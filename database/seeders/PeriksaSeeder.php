<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Periksa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periksa::create([
            'id_pasien' => 2,
            'id_dokter' => 1,
            'tgl_periksa' => Carbon::now(),
            'catatan' => 'Pasien mengalami demam tinggi dan batuk.',
            'biaya_periksa' => 150000
        ]);
    }
}
