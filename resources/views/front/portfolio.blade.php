@extends('layout.master')
@php
    $title = 'Portfolio';
    $link = 'portfolio';
@endphp
@section('title')
    Portfolio
@endsection
@section('header_menu')
    @includeIf('includes.header_menu2')
@endsection
@section('comman_banner')
    @includeIf('includes.common_banner')
@endsection
@section('latest_work')
    <section class="work-area section-gap-top section-gap-bottom-90" id="work">
        @include('includes.latest_work')
    </section>
@endsection
@section('contact')
    @includeIf('includes.common-contact')
@endsection