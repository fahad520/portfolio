@extends('layout.admin_master')
@section('title')
    Dashboard
@endsection
@section('header')
    @includeIf('admin.includes.header')
@endsection
@section('content')
    <div id="wrapper">
    @includeIf('admin.includes.slider')
    @includeIf('admin.includes.dashboard_content')
    </div>
@endsection
@section('footer')
    @includeIf('admin.includes.footer')
@endsection
