<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Meta tags for SEO--}}
    @include('meta.meta')

    {{-- Title --}}
    <title>@yield('title')</title>

    {{-- Fonts --}}
    @includeIf('assets.fonts')

    {{-- Common CSS --}}
    @includeIf('assets/css')

    {{-- Local Css Section --}}
    @yield('css')
</head>
<body>
{{-- Script if JS is not enabled --}}
@includeIf('javascript/no-script')

{{-- Pre Loader --}}
@includeIf('javascript/loader')

{{-- main menu --}}
@yield('header_menu')

{{-- comman banner --}}
@yield('comman_banner')

{{-- Body Content --}}
@yield('content')

{{-- common about --}}
@yield('common_about')

{{-- latest work --}}
@yield('latest_work')

{{-- Job history --}}
@yield('job_history')

{{-- services --}}
@yield('services')

{{-- Comments --}}
@yield('comments')

{{-- Common Contact me --}}
@yield('contact')

{{-- Footer --}}
@includeIf('includes/footer')

{{-- Scroll --}}
@includeIf('includes/scroll')

{{-- Common JS --}}
@includeIf('assets/js')

{{-- Local Js Section --}}
@yield('js')

</body>
</html>