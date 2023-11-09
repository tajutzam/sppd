@extends('layouts.auth')
<title>Login - SPPD Ketrowonojoyo</title>
@section('content')
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6 m-5">
                    <div class="authincation-content m-5">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="images/sppd-logo.png" alt="" style="width: 100px; height: 100px">
                                    </div>
                                    <div class="text-center mb-3">
                                        <h4 style="font-weight: bold ">PUSKESMAS <br> KETROWONOJOYO</h4>
                                    </div>


                                    @if ($errors->any())
                                        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
                                            <div class="text-white">{{ $errors->first() }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <h4 class="text-center mb-4"></h4>
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="inputEmailAddress" class="form-label">Username</label>
                                            <input type="email" class="form-control" id="inputEmailAddress"
                                                placeholder="Username Anda" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="">
                                                <input type="password" class="form-control border-end-0" name="password"
                                                    id="inputChoosePassword" value="12345678" placeholder="Password Anda">
                                                <a href="javascript:;" class="input-group-text bg-transparent"
                                                    id="show-hide-password">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-end">

                                        </div>
                                        {{-- <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember my
                                                        preference</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>
                                    </form>
                                    {{-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign
                                                up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        const passwordInput = document.getElementById('inputChoosePassword');
        const showHidePasswordButton = document.getElementById('show-hide-password');
        let isPasswordVisible = false;

        showHidePasswordButton.addEventListener('click', () => {
            if (isPasswordVisible) {
                passwordInput.type = 'password';
                showHidePasswordButton.innerHTML = '<i class="fa fa-eye"></i>';
            } else {
                passwordInput.type = 'text';
                showHidePasswordButton.innerHTML = '<i class="fa fa-eye-slash"></i>';
            }
            isPasswordVisible = !isPasswordVisible;
        });
    </script>
@endsection
