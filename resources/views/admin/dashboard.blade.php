@extends('layout.admin_master')
@section('header')
    @includeIf('admin.includes.header')
@endsection
@section('slider')
    @includeIf('admin.includes.slider')
@endsection
@section('js')
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
@endsection