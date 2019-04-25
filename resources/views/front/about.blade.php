@extends('layout.master')
@php
    $title = 'About';
    $link = 'about';
@endphp
@section('title')
    About
@endsection
@section('header_menu')
    @includeIf('includes.header_menu2')
@endsection
@section('comman_banner')
    @includeIf('includes.common_banner')
@endsection
@section('common_about')
    @includeIf('includes.common_about')
@endsection
@section('job_history')
    <section class="job-area offwhite section-gap-top section-gap-bottom-90">
        @includeIf('includes.job_history')
    </section>
@endsection
@section('comments')
    @includeIf('includes.comments')
@endsection
@section('contact')
    @includeIf('includes.common-contact')
@endsection