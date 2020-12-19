<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@lang('commities.commity1')</title>
    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('prof/plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('prof/plugins/owlcarousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('prof/style.css')}}">
</head>
<body>

@include('frontend.frontLayout.front_header')
<section class="committee">
    <div class="container">
        <div class="committee-title">
            <h2>@lang('commities.commity1')</h2>
        </div>
        <div class="committee-name">
            <h4>@lang('commities.commity1')</h4>
        </div>
        <div class="committee-disc">
            <p>
                <span>Наш лагерь находится в горном ущелье Бурчи-Мулло Босталынского района Ташкентской области - 110 км от города Ташкента. Лагерь очень</span><br>
                компактный, зеленый, со всеми условиями и улучшенными планировки. <br>
                <span>Вместимость лагеря рассчитана на  320 детей в возрасте от 7 до 14 лет. Предусмотрены 4 смены, продолжительность каждой смены составляет</span> <br>
                двенадцать дней. Лагерь находится в горном ущелье Бурчи-Мулло Босталынского района Ташкентской области - 110 км от города Ташкента. Лагерь <br>
                очень компактный, зеленый, со всеми условиями и улучшенными планировки. <br>
                <span>Предусмотрены 4 смены, продолжительность каждой смены составляет двенадцать дней.</span>
            </p>
        </div>
        <div id="links" class="owl-carousel owl-theme">
            <div class="item">
                <div class="item-img">
                    <a href="{{ route('fit') }}">
                        <img src="{{asset('prof/images/zal.jpg')}}" alt="">
                    </a>
                </div>
                <div class="item-name">
                    <h4>ФОК</h4>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <a href="{{ route('medicine') }}">
                        <img src="{{asset('prof/images/vra4.jpg')}}" alt="">
                    </a>
                </div>
                <div class="item-name">
                    <h4>Мед. пункт</h4>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <a href="{{ route('market') }}">
                        <img src="{{asset('prof/images/magaz.jpg')}}" alt="">
                    </a>
                </div>
                <div class="item-name">
                    <h4>Фитобар</h4>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <a href="{{ route('kitchen') }}">
                        <img src="{{asset('prof/images/osh.jpg')}}" alt="">
                    </a>
                </div>
                <div class="item-name">
                    <h4>Столовая</h4>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <a href="{{ route('museum') }}">
                        <img src="{{asset('prof/images/event3.jpg')}}" alt="">
                    </a>
                </div>
                <div class="item-name">
                    <h4>Музей</h4>
                </div>
            </div>
        </div>
    </div>
        <div class="committee-end_img">
            <img src="{{asset('prof/images/end-img.png')}}" alt="">
        </div>
    </div>
</section>
@include('frontend.frontLayout.front_footer')
</body>
</html>

<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/slick/slick.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('prof/plugins/jq.js')}}">
</script>
<script src="{{asset('prof/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{asset('prof/plugins/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('prof/script.js')}}"></script>
