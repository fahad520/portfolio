@extends('layout.master')
@section('title')
    Single Blog
@endsection
@php($link = 'blogs')
@section('header_menu')
    @includeIf('includes.header_menu2')
@endsection
<section class="banner-area relative">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Single Blog
                </h1>
                <p class="link-nav">
						<span class="box">
							<a href="{{route('home')}}">Home </a>
							<a href="" disabled="true">Single Blog</a>
                </span>
                </p>
            </div>
        </div>
    </div>
</section>
@section('content')
    @includeIf('includes.single_blog')
@endsection