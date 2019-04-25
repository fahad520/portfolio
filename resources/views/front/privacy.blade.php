@extends('layout.master')
@php
    $title = 'Privacy Policy';
    $link = 'privacy';
@endphp
@section('title')
    Privacy Policy
@endsection
@section('header_menu')
    @includeIf('includes.header_menu2')
@endsection
@section('comman_banner')
    @includeIf('includes.common_banner')
@endsection
@section('contact')
    @includeIf('includes.common-contact')
@endsection