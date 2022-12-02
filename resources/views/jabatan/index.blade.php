@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-primary d-inline">Jabatan</h6>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a href="/jabatan/create" class="btn btn-sm btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jabatan</th>
                                <th>Gaji Pokok</th>
                                <th>Upah Lembur</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Jabatan</th>
                                <th>Gaji Pokok</th>
                                <th>Upah Lembur</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- @foreach ($collection as $item) --}}
                            <tr>
                                <td>1</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>61</td>
                                <td>
                                    <form action="/jabatan/edit" method="POST" class="d-inline">
                                        @csrf
                                        <input type="id" value="p" hidden>
                                        <button type="submit" class="btn-sm btn-warning"><i
                                                class="fas fa-edit"></i></button>
                                    </form>
                                    <form action="" method="POST" class="d-inline">
                                        @csrf
                                        <input type="id" value="" hidden>
                                        <button type="submit" class="btn-sm btn-danger"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            {{-- @endforeach --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
