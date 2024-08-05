@extends('layouts.auth')

@section('container')
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card overflow-hidden">
                        <div class="row g-0">

                            <div class="col-12">
                                <div class="p-4">
                                    <div class="d-flex justify-content-center">
                                        <img class="rounded-circle img-thumbnail avatar-xl" src="assets/images/top-fit.jpg" alt="">
                                    </div>

                                    {{-- <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to Velzon.</p> --}}

                                    <div class="mt-3">
                                        <form action="{{ url('adm-login-post') }}" method="post" class="needs-validation">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="username" class="col-form-label">Username</label>
                                                <input type="text" name="username" class="form-control" id="username" placeholder="Masukan username">
                                            </div>

                                            <div class="mb-3">
                                                <label class="col-form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Masukan password" id="password-input">

                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn w-100 text-dark fw-semibold" style="background-color: #f7ea39c7" type="submit">Login</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->
@endsection
