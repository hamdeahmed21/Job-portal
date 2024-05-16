@extends('frontend.layouts.master')
@section('title')
    Home Page
@endsection

@section('content')
    <div class="bg-homepage1"></div>

   @include('frontend.home.section.hero-section')

    <div class="mt-100"></div>

   @include('frontend.home.section.category-section')

   @include('frontend.home.section.futured-jobs')

    @include('frontend.home.section.why-choose-section')

    @include('frontend.home.section.learn-more-section')

    @include('frontend.home.section.container-section')

    @include('frontend.home.section.recruiters-section')

    @include('frontend.home.section.pricing-plan-section')

    @include('frontend.home.section.jobs-by-location-section')

    @include('frontend.home.section.what-say-our-clients-section')

    @include('frontend.home.section.blog-section')
@endsection
