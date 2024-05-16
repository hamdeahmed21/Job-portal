<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


@extends('frontend.layouts.master')
@section('title')
    Confirm password
@endsection

@section('content')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Confirm password</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="{{'/'}}">Home</a></li>
                            <li>Confirm password</li>
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
                            <h2 class="mt-10 mb-5 text-brand-1">Confirm password</h2>
                            <p class="font-sm text-muted mb-30">This is a secure area of the application. Please confirm your password before continuing.</p>
                        </div>

                        <form class="login-register text-start mt-20" action="{{ route('password.confirm') }}">
                            @csrf
                            <div class="form-group">
                                <input class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password" type="password"
                                       name="password"
                                       required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default hover-up w-100" type="submit" name="continue">Confirm password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
