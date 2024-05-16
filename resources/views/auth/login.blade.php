@extends('frontend.layouts.master')
@section('title')
    Login
@endsection

@section('content')

    <section class="pt-120 login-register">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 mx-auto">
                    <div class="login-register-cover">
                        <div class="text-center">
                            <h2 class="mb-5 text-brand-1">Login</h2>
                            <p class="font-sm text-muted mb-30">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form class="login-register text-start mt-20" action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email *</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" placeholder="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password *</label>
                                        <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('password.request') }}" class="text-small">
                                        Forgot Password?
                                    </a>
                                </div>

                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-default hover-up w-100" type="submit" name="login">Login</button>
                            </div>
                            <div class="text-muted text-center">Don't have an account?
                                <a href="{{ route('register') }}">Registration</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <div class="mt-120"></div>
@endsection
