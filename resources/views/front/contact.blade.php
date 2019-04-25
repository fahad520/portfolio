@extends('layout.master')
@php
    $title = 'Contact Us';
    $link = 'contact';
@endphp
@section('title')
    Contact Us
@endsection
@section('header_menu')
    @includeIf('includes.header_menu2')
@endsection
@section('comman_banner')
    @includeIf('includes.common_banner')
@endsection
@section('content')
    @includeIf('includes.contact_area')
@endsection