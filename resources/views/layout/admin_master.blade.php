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
    @yield('css')

    {{-- Header JS --}}
    @includeIf('admin.admin.assets.head_js')


</head>
<body>


{{-- Js Files --}}
@includeIf('admin.assets.js')

{{-- Local JS --}}
@yield('js')

</body>
</html>