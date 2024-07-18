@extends('layouts.member')

@section('container')
<div class="auth-page-content overflow-hidden pt-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="d-flex justify-content-center" style="margin-bottom: 80px">
                    <img class="rounded-circle img-thumbnail" src="assets/images/top-fit.jpg" alt="">
                </div>

                <div class="button-container">
                    <a href="/member" class="btn landing-btn">Login</a>
                    <a href="/register-page" class="btn landing-btn">Register</a>
                </div>

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection
