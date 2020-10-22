@extends('layouts.app')
@section('styles')
    @yield('styles_page')
@endsection
@section('body')
    <section class="login-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material">
                        <div class="text-center">
                            <img src="{{ asset('assets/media/png/logo.png') }}" alt="logo.png">
                        </div>
                        <div class="auth-box card col-sm-4" style="margin: auto;">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left">Recover your password</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email-address" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button"
                                                class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            Reset Password
                                        </button>
                                    </div>
                                </div>
                                <p class="f-w-600 text-right">Back to <a href="auth-sign-in-social.html">Login.</a></p>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="index.html"><b>Back to
                                                    website</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
