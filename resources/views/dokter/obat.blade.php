@extends('master.app')

@section('content-header')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Obat</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Obat</li>
            </ol>
        </div>
    </div>
@endsection

@section('sidebar')
    <li class="nav-item">
        <a href="{{ route('dokter.dashboard') }}" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dokter.periksa.index') }}" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Periksa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dokter.obat.index') }}" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Obat
            </p>
        </a>
    </li>
@endsection

@section('content')
    {{-- <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dokter</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header --> --}}

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    {{-- FORM --}}
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Periksa</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('dokter.obat.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_obat">Nama Obat</label>
                                        <input type="text" class="form-control" id="nama_obat" name="nama_obat"
                                            placeholder="Input obat's name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kemasan">Kemasan</label>
                                        <input type="text" class="form-control" id="kemasan" name="kemasan"
                                            placeholder="Input kemasan's name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga"
                                            placeholder="Input the price" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Tambah Obat</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="card">
                        {{-- OBAT --}}
                        <div class="card-header">
                            <h3 class="card-title">List Obat</h3>

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
                                        <th>ID Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Kemasan</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($obats as $obat)
                                        <tr>
                                            <td>{{ $obat->id }}</td>
                                            <td>{{ $obat->nama_obat }}</td>
                                            <td>{{ $obat->kemasan }}</td>
                                            <td>{{ $obat->harga }}</td>
                                            <td>
                                                <a href="{{ route('dokter.obat.edit', $obat->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('dokter.obat.destroy', $obat->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus obat ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
