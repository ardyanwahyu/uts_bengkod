<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Periksa;
use Illuminate\Http\Request;
use App\Models\DetailPeriksa;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periksas = Periksa::all();
        return view('dokter.periksa', compact('periksas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $periksa = Periksa::with(['pasien', 'detailPeriksa.obat'])->findOrFail($id);
        return view('dokter.periksaShow', compact('periksa'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $periksa = Periksa::findOrFail($id);
        $obats = Obat::all(); // kirim semua obat
        return view('dokter.periksaEdit', compact('periksa', 'obats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tgl_periksa' => 'required|date',
            'catatan' => 'nullable|string',
            'obat' => 'array|required',
            'obat.*' => 'exists:obats,id',
        ]);

        $periksa = Periksa::findOrFail($id);
        $periksa->update([
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => $request->catatan,
        ]);

        // Hapus obat lama
        DetailPeriksa::where('id_periksa', $periksa->id)->delete();

        // Tambah obat baru
        foreach ($request->obat as $id_obat) {
            DetailPeriksa::create([
                'id_periksa' => $periksa->id,
                'id_obat' => $id_obat,
            ]);
        }

        // 💰 Hitung total harga obat
        $totalHargaObat = Obat::whereIn('id', $request->obat)->sum(column: 'harga');

        // Tambahkan jika ada biaya jasa dokter (opsional)
        $biayaJasa = 50000; // kamu bisa sesuaikan atau ambil dari config
        $totalBiaya = $totalHargaObat + $biayaJasa;

        // Update kolom biaya_periksa
        $periksa->update([
            'biaya_periksa' => $totalBiaya
        ]);

        return redirect()->route('dokter.periksa.index')->with('success', 'Data pemeriksaan berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $periksa = Periksa::findOrFail($id);
        $periksa->delete();

        return redirect()->route('dokter.periksa.index')->with('success', 'Obat berhasil dihapus.');
    }
}
