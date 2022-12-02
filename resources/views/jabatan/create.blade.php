@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-primary d-inline">Form Tambah Data</h6>
                    </div>
                    <div class="col d-flex justify-content-end">
                        {{-- <a href="/jabatan/create" class="btn btn-sm btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a> --}}
                    </div>
                </div>

            </div>
            <div class="card-body">
                <form class="user">
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Nama Jabatan">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Gaji Pokok">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Upah Lembur">
                    </div>
                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Tambah
                        </a>                    
                    <hr>
                    {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                        <i class="fab fa-google fa-fw"></i> Register with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                    </a> --}}
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
