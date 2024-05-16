@extends('frontend.layouts.master')
@section('title')
    Register
@endsection

@section('content')

    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Register</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="{{ url('/') }}">Home</a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-120 login-register">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                    <div class="login-register-cover">
                        <div class="text-center">
                            <h2 class="mb-5 text-brand-1">Register</h2>
                            <p class="font-sm text-muted mb-30">Dont have a account yet? Create one </p>
                        </div>
                        <form class="login-register text-start mt-20" method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Full Name -->
                            <div class="form-group">
                                <label class="form-label" for="name">Full Name *</label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Full Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email Address -->
                            <div class="form-group">
                                <label class="form-label" for="email">Email *</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label class="form-label" for="password">Password *</label>
                                <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label class="form-label" for="password_confirmation">Confirm Password *</label>
                                <input class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <hr>
                                <h6 for="" class="mb-2">Create Account For</h6>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="account_type" id="typeCandidate" value="candidate" {{ old('account_type') == 'candidate' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="typeCandidate">Candidate</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="account_type" id="typeCompany" value="company" {{ old('account_type') == 'company' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="typeCompany">Company</label>
                                </div>
                                @error('account_type')
                                <span class="invalid-feedback d-block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                                @enderror

                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button class="btn btn-default hover-up w-100" type="submit" name="register">Submit &amp; Register</button>
                            </div>

                            <div class="text-muted text-center">
                                Already have an account?
                                <a href="{{ route('login') }}">Sign in</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
