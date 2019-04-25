@extends('layout.master')
@php
    $title = 'Services';
    $link = 'services';
@endphp
@section('title')
    Services
@endsection
@section('header_menu')
    @includeIf('includes.header_menu2')
@endsection
@section('comman_banner')
    @includeIf('includes.common_banner')
@endsection
@section('services')
    <section class="service-area section-gap white">
    @includeIf('includes.services')
    </section>
@endsection
@section('contact')
    @includeIf('includes.common-contact')
@endsection