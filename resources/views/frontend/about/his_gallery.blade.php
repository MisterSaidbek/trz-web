<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@lang('about.his_gallery')</title>

    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/.fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="gallery">
    <div class="container">
        <div class="gallery-title">
            <h2>@lang('about.his_gallery')</h2>
        </div>
        <div class="gallery-name">
            <h4>
                Богатая история <br>
                <span>"o'ztemiryo'lmashta'mir"</span>
            </h4>
        </div>
        <div class="gallery-images">
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/1.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/1.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/2.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/2.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/3.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/3.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/4.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/4.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/5.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/5.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/6.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/6.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/7.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/7.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/8.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/8.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/9.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/9.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/10.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/10.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/11.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/11.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/12.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/12.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/13.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/13.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/14.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/14.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/15.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/15.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/16.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/16.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/17.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/17.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/18.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/18.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/19.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/19.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/20.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/20.jpg') }}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{ asset('images/frontend_images/about/his_gallery/21.jpg') }}">
                <img src="{{ asset('images/frontend_images/about/his_gallery/21.jpg') }}" alt="">
            </a>
        </div>

        <div class="end-img">
            <img src="{{ asset('images/frontend_images/about/his_gallery/end-img.png') }}" alt="">
        </div>
    </div>
</section>
@include('frontend.frontLayout.front_footer')




<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>