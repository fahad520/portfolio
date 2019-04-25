@extends('layout.master')
@php
    $link = 'home';
@endphp
@section('title')
    Home
@endsection
@section('header_menu')
    @includeIf('includes.header_menu')
@endsection
@section('content')
    <section class="home-banner-area">
        @includeIf('includes.banners')
    </section>
    <section class="brands-area">
        @includeIf('includes.brands')
    </section>
@endsection
@section('common_about')
    @includeIf('includes.common_about')
@endsection
@section('latest_work')
    <section class="work-area section-gap-top section-gap-bottom-90" id="work">
        @includeIf('includes.latest_work')
    </section>
@endsection
@section('job_history')
    <section class="job-area section-gap-top section-gap-bottom-90">
        @includeIf('includes.job_history')
    </section>
@endsection
@section('services')
    <section class="service-area section-gap">
        @includeIf('includes/services')
    </section>
@endsection
@section('comments')
    @includeIf('includes/comments')
@endsection
@section('contact')
    @includeIf('includes.common-contact')
@endsection