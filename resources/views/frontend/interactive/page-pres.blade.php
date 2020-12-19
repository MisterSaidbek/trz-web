<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Страница Президента</title>

    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/interactive/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/interactive/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/interactive/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/interactive/style.css') }}">

</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
    <section class="pr-page">
        <div class="container">
            <div class="page-title" style="margin-top: 25px;">
                <h2>Страница Президента</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-8">
                <div class="page-name">
                    <h4>@lang('page_pres.rule')</h4>
                </div>
                    <div class="page-disc">
                        <span>@lang('page_pres.span1')</span>
                        <span>@lang('page_pres.span2')</span>
                        <span>@lang('page_pres.span3')</span>
                        <span>@lang('page_pres.span4')</span>
                        <span>@lang('page_pres.span5')</span>
                        <span>@lang('page_pres.span6')</span>                        
                    </div>
                </div> 
                <div class="col-lg-4">
                    <div class="president-main">
                        <div class="page-img">
                            <img src="{{ asset('images/frontend_images/interactive/sloy1.jpg') }}" alt="">
                        </div>
                    <div class="president">
                        <div class="president-name">
                            <span>
                                Президент Республики Узбекистан <br>
                                Шавкат Мирзиеев
                            </span>
                        </div>
                        <div class="president-date">
                            <span>
                                Г. Ташкент, <br>
                                1 февраля 2019 года
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="end-img">
                <img src="images/end-img.png" alt="">
            </div>
        </div>
    </section>
        @include('frontend.frontLayout.front_footer')


    <script src="{{ asset('/js/frontend_js/interactive/jq.js') }}">
    </script>

    <script src="{{asset('assets/jquery.min.js')}}"></script>
    <script src="{{asset('assets/slick/slick.js')}}"></script>


    <script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
    <script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/js/frontend_js/interactive/owl.carousel.js') }}"></script>
    <script src="{{ asset('/js/frontend_js/interactive/script.js') }}"></script>
</body>
</html>