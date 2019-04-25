<header id="header" class="dark">
    <div class="container main-menu">
        <div class="row align-items-center d-flex">
            <div id="logo">
                <a href=""><img src="{{asset('assets/img/logo2.png')}}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container" class="ml-auto">
                <ul class="nav-menu white">
                        <li class=""><a class="{{($link === 'home')? 'active': ''}}" href="{{route('home')}}">Home</a></li>
                        <li><a class="{{($link === 'portfolio')? 'active': ''}}" href="{{route('portfolio')}}">Portfolio</a></li>
                        <li><a class="{{($link === 'about')? 'active': ''}}" href="{{route('about')}}">About</a></li>
                        <li><a class="{{($link === 'contact')? 'active': ''}}" href="{{route('contact')}}">Contact Us</a></li>
                        <li><a class="{{($link === 'services')? 'active': ''}}" href="{{route('services')}}">Services</a></li>
                        <li><a class="{{($link === 'blogs')? 'active': ''}}" href="{{route('blogs')}}">Blogs</a></li>
                        {{--  <li><a href="{{route('privacy')}}">Privacy Policy</a></li>--}}
                </ul>
            </nav>
        </div>
    </div>
</header>