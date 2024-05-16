@extends('frontend.layouts.master')
@section('title')
    Reset password
@endsection

@section('content')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Reset password</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="{{'/'}}">Home</a></li>
                            <li>Reset password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-120 login-register">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 mx-auto">
                    <div class="login-register-cover">
                        <div class="text-center">
                            <h2 class="mt-10 mb-5 text-brand-1">Reset password!</h2>
                        </div>

                        <form class="login-register text-start mt-20" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <label class="form-label" for="name">Email *</label>
                                <input class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="email" type="email" name="email"
                                       value="{{old('email', $request->email)}}" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="name">New Password *</label>
                                <input class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password" type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="name">Confirm Password *</label>
                                <input class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" id="password_confirmation" type="password"
                                       name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <button class="btn btn-default hover-up w-100" type="submit" name="continue">Reset Password</button>
                            </div>
                            <div class="text-muted text-center">Don't have an Account? <a href="{{ route('login') }}">Sign in</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
