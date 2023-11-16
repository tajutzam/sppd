\@extends('layouts.app')
<title>Edit Peraturan - SPPD Puskesmas Ketrowonojoyo</title>
@section('content')
    <style>
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
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h2 class="card-title " style="font-weight: bold; font-size: 25px">Edit Peraturan Hukum</h2>
                    </div>
                    <hr class="m-0" style="opacity: 30%; height: 0.7px; ">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="" method="post" class="form-valide-with-icon needs-validation"
                                novalidate="">
                                @method('post')
                                @csrf
                                <div class="mb-3">

                                    <div class="card-body custom-ekeditor">
                                        <input id="ckeditor"></input>
                                    </div>
                                </div>

                                <a href="{{ route('bank-account') }}" class="btn me-2 btn-dark">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
