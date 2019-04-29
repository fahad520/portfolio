<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    {{-- meta files --}}
    @includeIf('meta.admin.meta')

    {{-- Title --}}
    <title>@yield('title')</title>

    {{-- css files --}}
    @includeIf('admin.assets.css')

    {{-- Local css --}}
    @stack('css')

</head>
<body id="page-top" class="@stack('class')">

{{-- header --}}
@yield('header')

{{-- Content Wrapper --}}
@yield('content')

{{-- footer --}}
@yield('footer')

{{-- Js Files --}}
@includeIf('admin.assets.js')

{{-- Local JS --}}
@stack('js')

</body>
</html>