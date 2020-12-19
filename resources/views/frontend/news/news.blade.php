<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Новости</title>

    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">

    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{ asset('css/frontend_css/news/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/news/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/news/news/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/news/style.css') }}">
</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="news">
    <div class="container">
        <div class="news-title">
            <h2>Новости</h2>
        </div>
        <div class="news-main">
            <div class="row">
                <div class="col-md-7">
                    <a href="https://www.xabar.uz/ru/siyosat/shavkat-mirziyoyev-temiryolchilarga-tabrik-yolladi">
                    <div class="news-first" style="background: url('images/frontend_images/news/pres.jpg')!important;">
                        <div class="news-first_disc">

                            <span>
                                    Президент Республики Узбекистан <br>
                                    Шавкат Мирзиёев направил поздравление <br>
                                    коллективу акцианерного общества <br>
                                    «Узбекистон темир йуллари» в связи <br>
                                    с процессиональным праздником.
                                </span>

                        </div>
                        <div class="news-first_date">
                            <span><i class="fa fa-calendar" aria-hidden="true"></i> 01.08.2020</span>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-5">
                    <a href="http://railway.uz/ru/proekty/6747/?VOICE=Y">
                    <div class="news-second" style="background: url('images/frontend_images/news/ann-big.png');">
                        <div class="news-second_disc">
                                <span>
                                    Акционерное общество «Узбекистон <br>
                                    темир йуллари» проводит конкурс <br>
                                    на консалтинг по менеджменту <br>
                                    финансово-хозяйственной ...
                                </span>
                        </div>
                        <div class="news-second_date">
                            <span><i class="fa fa-calendar" aria-hidden="true"></i> 10.09.2020</span>
                        </div>
                    </div>
                    </a>
                    <a href="http://railway.uz/ru/?sphrase_id=2478720">
                    <div class="news-third" style="background: url('images/frontend_images/news/ann-small.png')">
                        <div class="news-third_disc">
                                <span>
                                   Медиа-тур: Много нового, интересного и актуального <br>
                                   на новых объектах метрополитена. Развитие, достижения <br>
                                   и перспективы в годы ...
                                </span>
                        </div>
                        <div class="news-third_date">
                            <span><i class="fa fa-calendar" aria-hidden="true"></i> 10.09.2020</span>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
{{--        <div class="news-btn">
            <a href="{{ url('/news/{id}') }}">показать больше</a>
        </div>--}}

{{--        @foreach($newsAll as $news)
            <div class="container">
                <h2> Mavzu: {{ $news->title }}</h2>

            <p>
                    @if(locale_accept_from_http('locale/ru')){
                    {{ $news->description_ru }}
                    }
                    @elseif(locale_accept_from_http('locale/uz')){
                    {{ $news->description_uz }}

                    @elseif(locale_accept_from_http('locale/oz')){
                    {{ $news->description_oz }}
                    } }

                    {{$news->description_ru}}
            </p>

                <img src="{{ asset('images/backend_images/'.$news->image) }}" alt="">
            </div>
        @endforeach--}}
        <div class="news-end_btn">
            <img src="{{ asset('images/frontend_images/news/end-img.png') }}" alt="">
        </div>
    </div>

</section>


{{--
<section class="news">
    <div class="container">
        @foreach($newsAll as $newsAll)
        <div class="news-title">
            <h2>Новости</h2>
        </div>
        <div class="news-name">
            <h4>
                <span>{{ $newsAll->title }}</span>
            </h4>
        </div>
        <div class="news-some_title">
                <span>
                 {{ $newsAll->theme }}
                </span>
        </div>
        <div class="news-images">
            <a data-fancybox="gallery" href="{{ asset('images/backend_images/'.$newsAll->image) }}">
                <img src="{{ asset('images/backend_images/'.$newsAll->image) }}" alt="">
            </a>
        </div>
        <div class="news-disc">
            <p>
              {{ $newsAll->description_ru }}
            </p>
        </div>
        <div class="end-img">
            <img src="{{ asset('images/frontend_images/modern/end-img.png') }}" alt="">
        </div>
        @endforeach
    </div>
</section>--}}



@include('frontend.frontLayout.front_footer')



<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="{{ asset('js/frontend_js/news/jq.js') }}">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{ asset('js/frontend_js/news/owl.carousel.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>