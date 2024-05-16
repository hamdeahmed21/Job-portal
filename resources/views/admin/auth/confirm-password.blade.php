@extends('admin.auth.layouts.auth-master')
@section('title')
    Confirm Password
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
                        <div class="card-header"><h4>Confirm Password</h4></div>

                        <div class="card-body">
                            <p class="text-muted">This is a secure area of the application. Please confirm your password before continuing.</p>
                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" name="password" required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Confirm Password
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
