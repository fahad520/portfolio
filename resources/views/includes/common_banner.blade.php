<section class="banner-area relative">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{$title}}
                </h1>
                <p class="link-nav">
						<span class="box">
							<a href="{{route('home')}}">Home </a>
							<a href="{{route($link)}}"> {{$title}}</a>
                </span>
                </p>
            </div>
        </div>
    </div>
</section>