@extends('master.app')

@section('content-header')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Detail Pemeriksaan</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Periksa</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8">
                    <!-- Detail Pemeriksaan -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Detail Pemeriksaan</h3>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-4">Nama Pasien</dt>
                                <dd class="col-sm-8">{{ $periksa->pasien->nama }}</dd>

                                <dt class="col-sm-4">Tanggal Periksa</dt>
                                <dd class="col-sm-8">{{ $periksa->tgl_periksa }}</dd>

                                <dt class="col-sm-4">Catatan</dt>
                                <dd class="col-sm-8">{{ $periksa->catatan ?? '-' }}</dd>

                                <dt class="col-sm-4">Obat</dt>
                                <dd class="col-sm-8">
                                    <ul>
                                        @forelse ($periksa->detailPeriksa as $detail)
                                            <li>{{ $detail->obat->nama_obat }}</li>
                                        @empty
                                            <li>Tidak ada obat</li>
                                        @endforelse
                                    </ul>
                                </dd>

                                <dt class="col-sm-4">Total Biaya Periksa</dt>
                                <dd class="col-sm-8">Rp {{ number_format($periksa->biaya_periksa, 0, ',', '.') }}</dd>
                            </dl>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('dokter.periksa.index') }}" class="btn btn-secondary">Kembali</a>
                            <a href="{{ route('dokter.periksa.edit', $periksa->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
