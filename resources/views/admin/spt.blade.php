@extends('layouts.app')
<title>SPT - SPPD Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0 pt-3 pb-3 pe-3">
                        <div class="row">
                            <div class="col-sm-6 ps-3">

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
                                    <button type="btn" class="btn btn-success" data-bs-toggle="modal" data-bs-target="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-file-earmark-arrow-down-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z" />
                                        </svg> Export Lap. Perjadin
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
                        <h2 class="card-title " style="font-weight: bold; font-size: 25px">Data SPT</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Pegawai Ditugaskan</th>
                                        <th>Tanggal Tugas</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
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
                    <h5 class="modal-title" style="font-weight: bold; font-size: 30px">Hapus SPT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="pt-3" style="font-size: 20px">Apakah anda yakin ingin menghapus SPT ini ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endsection
