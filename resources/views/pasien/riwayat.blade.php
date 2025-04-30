@extends('master.app')

@section('content-header')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
            </ol>
        </div>
    </div>
@endsection

@section('sidebar')
    <li class="nav-item">
        <a href="{{ route('pasien.dashboard') }}" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('pasien.periksa') }}" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Periksa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('pasien.riwayat') }}" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Riwayat
            </p>
        </a>
    </li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Periksa</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ID Periksa</th>
                                    <th>Dokter</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Catatan</th>
                                    <th>Obat</th>
                                    <th>Biaya Periksa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>P001</td>
                                    <td>Andi</td>
                                    <td>24-03-2025</td>
                                    <td>Perlu banyak tidur</td>
                                    <td>Obat tidur</td>
                                    <td>170000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>P002</td>
                                    <td>Andi</td>
                                    <td>26-03-2025</td>
                                    <td>Perlu banyak olahraga</td>
                                    <td>Ashwagandha</td>
                                    <td>200000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
