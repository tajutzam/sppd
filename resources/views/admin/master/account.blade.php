@extends('layouts.app')
<title>Data Akun - SPPD Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0 pt-3 pb-3 pe-3">
                        <div class="row">
                            <div class="col-sm-6">
                            </div>

                            <div class="col-sm-6 text-md-end">
                                <div class="buttton" role="" aria-label="Basic mixed styles example"
                                    style="padding: 1%">
                                    <button type="btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                        </svg> Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h2 class="card-title " style="font-weight: bold; font-size: 25px">Data Akun</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Akun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>
                                            <div class="d-flex ">
                                                <a href="#" class="btn btn-success shadow btn-xs sharp me-1 pt-2"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1 pt-2"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp pt-2"><i
                                                        class="fa fa-trash" data-bs-toggle="modal"
                                                        data-bs-target="#delete-account"></i></a>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Tiger Nixon</td>
                                        <td>
                                            <div class="d-flex ">
                                                <a href="#" class="btn btn-success shadow btn-xs sharp me-1 pt-2"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1 pt-2"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp pt-2"><i
                                                        class="fa fa-trash" data-bs-toggle="modal"
                                                        data-bs-target="#delete-account"></i></a>

                                            </div>
                                        </td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="delete-account">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 30px">Hapus Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="pt-3" style="font-size: 20px">Apakah anda yakin ingin menghapus Akun ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endsection
