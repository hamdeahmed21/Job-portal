@extends('admin.auth.layouts.auth-master')
@section('title')
    Reset Password
@endsection

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{asset('admin/assets/img/stisla-fill.svg')}}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>Reset Password</h4></div>

                        <div class="card-body">
                            <p class="text-muted">We will send a link to reset your password</p>
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf

                                <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" value="{{old('email', $request->email)}}"  required autofocus autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input id="password" type="password" class="form-control pwstrength {{$errors->has('password') ? 'is-invalid' : ''}}" data-indicator="pwindicator" name="password" required autocomplete="new-password" tabindex="2">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" name="password_confirmation" required autocomplete="new-password" tabindex="2">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
