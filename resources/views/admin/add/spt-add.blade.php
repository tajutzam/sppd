@extends('layouts.app')
<title>Tambah SPT - SPPD Puskesmas Ketrowonojoyo</title>
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/i18n/zh-TW.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>


    <style>
        .select2-selection {
            height: 34px !important;
            font-size: 15px;
            font-family: 'Open Sans', sans-serif;

            border-radius: 15px !important;
            border: solid 1px rgba(128, 128, 128, 0.5) !important;
            padding-left: 4px;
        }

        .select2-selection--multiple {
            height: 60px !important;
            /* width: 366px !important; */
        }

        .select2-selection {
            height: 60px !important;
            /* width: 366px !important; */
        }

        .select2-selection__choice {
            height: 40px;
            line-height: 40px;
            padding-right: 16px !important;
            padding-left: 16px !important;
            background-color: var(--primary) !important;
            color: #eee !important;
            border: none !important;
            border-radius: 3px !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: white;
        }

        .select2-selection__choice__remove {
            float: right;
            text-decoration-color: white;
            border-color: white;
            margin-right: 0;
            margin-left: 2px;
        }

        .select2-search--inline .select2-search__field {
            line-height: 40px;
            color: white;
            width: 100% !important;
        }

        .select2-container:hover,
        .select2-container:focus,
        .select2-container:active,
        .select2-selection:hover,
        .select2-selection:focus,
        .select2-selection:active {
            outline-color: transparent;
            border-color: var(--primary);
            outline-style: none;
            /* color: var(--primary); */
        }

        .select2-results__options li {
            display: block;

        }

        .select2-selection__rendered {
            transform: translateY(2px);
        }

        .select2-selection__arrow {
            display: none;
        }

        .select2-results__option--highlighted {
            background-color: var(--primary) !important;
            color: black !important;
        }

        .select2-dropdown {
            border-radius: 0 !important;
            box-shadow: 0px 3px 6px 0 rgba(0, 0, 0, 0.15) !important;
            border: none !important;
            margin-top: 4px !important;
            /* width: 366px !important; */
        }

        .select2-results__option {
            font-family: 'Open Sans', sans-serif;
            font-size: 13px;
            line-height: 24px !important;
            vertical-align: middle !important;
            padding-left: 8px !important;
        }

        .select2-results__option[aria-selected="true"] {
            background-color: #eee !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #6e6e6e;
            padding-top: 14px;
            line-height: 28px;
        }

        .select2-search__field {
            font-family: 'Open Sans', sans-serif;
            color: black;
            font-size: 13px;
            padding-left: 8px !important;
            border-color: var(--primary) !important;
        }

        .select2-selection__placeholder {
            color: #var(--primary) !important;
        }

        .custom-border {
            border: 1px solid rgba(128, 128, 128, 0.5);
            transition: border-color 0.3s;
            /* Add a transition for a smooth effect */
        }

        .custom-border:hover {
            border-color: var(--primary);
        }

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
    </style>
    <div class="container-fluid ">
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h2 class="card-title " style="font-weight: bold; font-size: 25px">Tambah SPT</h2>
                    </div>
                    <hr class="m-0" style="opacity: 30%;
        height: 0.7px; ">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon needs-validation" novalidate="" method="get">

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2" style="font-size: 19px; font-weight: 500">Nama
                                        Kegiatan
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Nama Kegiatan">
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2" style="font-size: 19px; font-weight: 500">Nama
                                        Sub
                                        Kegiatan
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Nama Sub Kegiatan">
                                </div>

                                <div class="form-unit form-divided mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Kategori
                                        Perjalanan</label>
                                    <select class="js-example-basic custom-border" name="states[]">
                                        <option>Pilih Kategori Perjalanan</option>
                                        <option value="a1">Item A1</option>
                                    </select>

                                </div>

                                <div class="row mb-3">
                                    <div class="col mt-2 mt-sm-0">
                                        <label class="text-label form-label ps-2"
                                            style="font-size: 19px; font-weight: 500">Tanggal Berangkat
                                        </label>
                                        <div class="input-group " data-placement="left" data-align="top"
                                            data-autobtn-close="true">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                            <input type="date" class="form-control input-default custom-border">
                                        </div>

                                    </div>
                                    <div class="col mt-2 mt-sm-0 ">
                                        <label class="text-label form-label ps-2"
                                            style="font-size: 19px; font-weight: 500">Tanggal Pulang
                                        </label>
                                        <div class="input-group " data-placement="left" data-align="top"
                                            data-autobtn-close="true">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                            <input type="date" class="form-control input-default custom-border">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-unit form-divided mb-3">
                                    <label class="text-label form-label ps-2" style="font-size: 19px; font-weight: 500">
                                        Pegawai Ditugaskan</label>
                                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                        <option value="a1">Item A1</option>
                                        <option value="a2">Item A2</option>
                                        <option value="b1">Item B1</option>
                                        <option value="c1">Item C1</option>
                                        <option value="c2">Item C2</option>
                                        <option value="c2">Item C3</option>
                                    </select>
                                </div>

                                <div class="form-unit form-divided mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Transportasi</label>
                                    <select class="js-example-basic custom-border" name="states[]">
                                        <option>Pilih Transportasi</option>
                                        <option value="a1">Item A1</option>
                                    </select>
                                </div>
                                <div class="form-unit form-divided mb-3">
                                    <label class="text-label form-label ps-2" style="font-size: 19px; font-weight: 500">
                                        Tempat Berangkat</label>
                                    <select class="js-example-basic custom-border" name="states[]">
                                        <option>Pilih Tempat Berangkat</option>
                                        <option value="a1">Item A1</option>
                                    </select>
                                </div>
                                <div class="form-unit form-divided mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Tempat Tujuan</label>
                                    <select class="js-example-basic custom-border" name="states[]">
                                        <option>Pilih Tempat Tujuan</option>
                                        <option value="a1">Item A1</option>
                                    </select>
                                </div>
                                <div class="form-unit form-divided mb-3">
                                    <label class="text-label form-label ps-2" style="font-size: 19px; font-weight: 500">Tipe
                                        Tujuan</label>
                                    <select class="js-example-basic custom-border" name="states[]">
                                        <option>Pilih Tipe Tujuan</option>
                                        <option value="a1">Item A1</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Lama
                                        Perjalanan
                                    </label>
                                    <input type="number" class="form-control input-default custom-border"
                                        placeholder="Masukkan Lama (Hari) ">
                                </div>

                                <div class="form-unit form-divided mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Akun
                                        Anggaran</label>
                                    <select class="js-example-basic custom-border" name="states[]">
                                        <option>Pilih Akun Anggaran</option>
                                        <option value="a1">Item A1</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Sudah Diterima Dari
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Terima Dari">
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Sub Komponen
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Sub Komponen">
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Jumlah Uang
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Jumlah Uang">
                                </div>

                                <div class="form-unit form-divided mb-3">
                                    <label class="text-label form-label ps-2" style="font-size: 19px; font-weight: 500">
                                        Nomor Rekening</label>
                                    <select class="js-example-basic custom-border" name="states[]">
                                        <option>Pilih Nomor Rekening</option>
                                        <option value="a1">Item A1</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Hadir Dalam
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Hadir Dalam">
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Arahan
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Arahan">

                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Masalah
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Masalah">
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Saran
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Saran">
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Lain -Lain
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Lain -Lain">
                                </div>

                                <div class="mb-4">
                                    <label class="text-label form-label ps-2"
                                        style="font-size: 19px; font-weight: 500">Keterangan
                                    </label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Keterangan">
                                </div>
                                <button type="submit" class="btn me-2 btn-dark">Kembali</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $(".js-example-basic-multiple").select2({
                placeholder: "Pilih Pegawai"
            }).on('change', function(e) {
                if ($(this).val() && $(this).val().length) {
                    $(this).next('.select2-container')
                        .find('li.select2-search--inline input.select2-search__field').attr('placeholder',
                            'Pilih Pegawai');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            $(".js-example-basic").select2({
                placeholder: "Pilih Pegawai"
            }).on('change', function(e) {
                if ($(this).val() && $(this).val().length) {
                    $(this).next('.select2-container')
                        .find('li.select2-search--inline input.select2-search__field').attr('placeholder',
                            'Pilih Pegawai');
                }
            });
        });
    </script>
@endsection
