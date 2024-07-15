@extends('layouts.guest')
@section('title')
Login
@endsection
@section('content')
<div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Login -->
            <div class="card  p-2">
                <!-- Logo -->
                <div class="app-brand justify-content-center mt-5">
                    <a href="/" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <span style="color: #666cff">

                            </span>
                        </span>
                        <div class="row justify-content-center">
                            <div class="col-9 d-flex justify-content-center">
                                <img style="width: 80px; heignt:80px;" src="{{ url('images/wordle.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /Logo -->

                <div class="card-body mt-2">


                    <p class="mb-4">Please sign-in to your account</p>
                    @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                      </div>
                    @endif


                    <form id="formAuthentication" class="mb-5" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-floating form-floating-outline mb-3">
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Enter your email " autofocus />
                            <label for="email">Email </label>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input type="password" id="password" class="form-control" name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <label for="password">Password</label>
                                    </div>
                                    <span class="input-group-text cursor-pointer"><i
                                            class="mdi mdi-eye-off-outline"></i></span>
                                </div>
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-5 d-flex justify-content-between mt-5">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me">
                                    Remember Me
                                </label>
                            </div>
                            <a href="" class="float-end mb-1 mt-2">
                                <span>Forgot Password?</span>
                            </a>
                        </div>
                        <div class="mb-3">
                            <button style="height: 45px;" class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>
                    </form>

                </div>
            </div>
            <img class="authentication-image d-none d-lg-block"
                src="{{ asset('admin/assets/img/illustrations/auth-basic-login-mask-light.png') }}" alt="">

        </div>
    </div>
</div>

@endsection
