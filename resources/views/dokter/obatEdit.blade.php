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
        <a href="{{ route('dokter.dashboard') }}" class="nav-link ">
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
        <a href="{{ route('dokter.obat.index') }}" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Obat
            </p>
        </a>
    </li>
@endsection

@section('content')
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
                            <form action="{{ route('dokter.obat.update', $obat->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_obat">Nama Obat</label>
                                        <input type="text" class="form-control" id="nama_obat" name="nama_obat"
                                            value="{{ $obat->nama_obat }}" placeholder="Input obat's name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kemasan">Kemasan</label>
                                        <input type="text" class="form-control" id="kemasan" name="kemasan"
                                            value="{{ $obat->kemasan }}" placeholder="Input kemasan's name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga"
                                            value="{{ $obat->harga }}" placeholder="Input the price" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Obat</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
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
