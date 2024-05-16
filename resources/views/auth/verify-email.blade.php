@extends('frontend.layouts.master')
@section('title')
    Resend Verification Email
@endsection

@section('content')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Resend Verification Email</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="{{'/'}}">Home</a></li>
                            <li>Resend Verification Email</li>
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
                            <h2 class="mt-10 mb-5 text-brand-1">Resend Verification Email</h2>
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                        <form class="login-register text-start mt-20" action="{{ route('verification.send') }}">
                            @csrf

                            <div class="form-group">
                                <button class="btn btn-default hover-up w-100" type="submit" name="continue">Resend Verification Email</button>
                            </div>
                        </form>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                                <div class="form-group">
                                    <button class="btn btn-default hover-up w-100" type="submit" name="continue">Log Out</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </section>
@endsection
