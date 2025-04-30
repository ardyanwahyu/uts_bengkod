@extends('master.app')

@section('content-header')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Periksa</li>
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
        <a href="{{ route('pasien.periksa') }}" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Periksa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('pasien.riwayat') }}" class="nav-link">
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
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Periksa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Anda</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Input your name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectRounded0">Pilih Dokter</label>
                                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                        <option>Value 1</option>
                                        <option>Value 2</option>
                                        <option>Value 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

<!-- bs-custom-file-input -->
<script src="{{ asset('lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
