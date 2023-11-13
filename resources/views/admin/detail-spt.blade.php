@extends('layouts.app')
<title>Detail SPT - SPPD Puskesmas Ketrowonojoyo</title>
@section('content')
    <style>
        .custom-card {
            box-shadow: 0 4px 8px var(--primary);
            ;
            /* Edit sesuai kebutuhan */
            transition: box-shadow 0.3s ease;
            /* Efek transisi */
        }

        .custom-card:hover {
            box-shadow: 0 8px 16px var(--primary);
            ;
            /* Edit sesuai kebutuhan saat hover */
        }

        .table tbody tr td {
            vertical-align: middle;
            border-color: #f5f5f5;
        }

        th {
            width: 200px;
            font-size: 18px;
            /* Atur lebar elemen th */
            /* Atur properti CSS lainnya sesuai kebutuhan */
        }
    </style>
    <div class="container-fluid ">
        <div class="row">
            <div class=" col-sm-12">
                <div class="card custom-card">
                    <div class="card-header text-align-between">
                        <h2 class="card-title " style="font-weight: bold; font-size: 25px">Data SPT</h2>
                        <div>
                            <a href="
                        {{ route('spt') }}">
                                <button type="submit" class="btn me-2 btn-dark">Kembali</button></a>
                            <button type="submit" class="btn me-2 btn-success">Cetak SPT, Laporan & Kuitansi</button>
                        </div>
                    </div>
                    <hr class="m-0" style="opacity: 30%;
        height: 0.7px; ">
                    <div class=" card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                {{-- <thead>
                                    <tr>
                                        <th>Koa</th>
                                        <th>Name</th>
                                    </tr>
                                </thead> --}}
                                <tbody>
                                    <tr>
                                        <th>Kegiatan</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sub Kegiatan</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Perjalanan</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pegawai Ditugaskan</th>
                                        <td> Yoi Bang <span class="badge badge-primary m-2">Sale</span> <br>
                                            Yoi Bang <span class="badge badge-primary m-2">Sale</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Alat Angkut</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Berangkat</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Lama Perjalanan</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Berangkat</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Pulang</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Akun Anggaran</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sudah Diterima Dari</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sub Komponen</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Jumlah Uang</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Rekening</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Hadir Dalam</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Arahan/Petunjuk</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Temuan Masalah</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Saran</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Lain Lain</th>
                                        <td> Yoi Bang
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td> Yoi Bang
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
@endsection
