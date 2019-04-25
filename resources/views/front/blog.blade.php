@extends('layout.master')
@php($title = 'Blog')
@php($link = 'blogs')
@section('title')
    Blog
@endsection
@section('header_menu')
    @includeIf('includes.header_menu2')
@endsection
@section('comman_banner')
    @includeIf('includes.common_banner')
@endsection
@section('content')
    @includeIf('includes.blogs')
@endsection