<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@lang('header.modern_page')</title>


    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/modern/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/modern/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/modern/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/modern/style.css') }}">

</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="modern">
    <div class="container">
        <div class="modern-title">
            <h2>@lang('header.modern_page')</h2>
        </div>
        <div class="uztem">
            <div class="row">
                <div class="col-md-6">
                    <div class="uztem-first">
                        <div class="uztem-name">
                            <h3>UzTE16M-001</h3>
                        </div>
                        <div class="uztem-disc">
                            <p>
                                <span>“Ўзбекистон темир йўллари” АЖ  Европа тикланиш ва тараққиёт банки</span> <br>
                                билан биргаликда  2001-йил 12 ноябрида  Дизел локомотив паркларини <br>
                                модернизация қилиш лойиҳаси бўйича  кредит шартномасини тузилган. <br>
                                <span>Ўзбекистон Республикаси Вазирлар маҳкамасининг 2002 йил 26 декабрдаги</span> <br>
                                № 451 сонли “Европа тикланиш ва тараққиёт банки иштирокидаги дизел <br>
                                локомитвлар паркини модернизация қилиш лойиҳасини амалга ошириш <br>
                                бўйича чора тадбирлар ҳақидаги қарорида 4 йиллик имтиёзли вақт <br>
                                кўшилгшан ҳолда 15 йиллик муддатга 53,681 млн. АҚШ доллари миқдорида <br>
                                кредит ажратилганлиги тасдиқланган. <br>
                                <span>Ушбу лоёиҳанги амалга оширишда дизелли локомотивлар паркини</span> <br>
                                модернизация қилиш, вагон ясаш мақсадида метал эритиш ва қуёиш <br>
                                маҳсулотларини “Механика куюв заводи” да қайта тиклаш кўзда тутилган. <br>
                                Лойиҳада поездлар ҳаракат хавфсизлиги, меҳнат мухофазаси, атроф муҳитни <br>
                                сақлаш, ёнилги энергия харажатларини тежаш кўзда тутилган.

                           {{--     <abbr title="">
                                    “Ўзбекистон темир йўллари” АЖ  Европа тикланиш ва тараққиёт банки
                                    билан биргаликда  2001-йил 12 ноябрида  Дизел локомотив паркларини
                                    модернизация қилиш лойиҳаси бўйича  кредит шартномасини тузилган.
                                    Ўзбекистон Республикаси Вазирлар маҳкамасининг 2002 йил 26 декабрдаги
                                    № 451 сонли “Европа тикланиш ва тараққиёт банки иштирокидаги дизел
                                    локомитвлар паркини модернизация қилиш лойиҳасини амалга ошириш
                                    бўйича чора тадбирлар ҳақидаги қарорида 4 йиллик имтиёзли вақт
                                    кўшилгшан ҳолда 15 йиллик муддатга 53,681 млн. АҚШ доллари миқдорида
                                    кредит ажратилганлиги тасдиқланган.
                                    Ушбу лоёиҳанги амалга оширишда дизелли локомотивлар паркини<
                                    модернизация қилиш, вагон ясаш мақсадида метал эритиш ва қуёиш
                                    маҳсулотларини “Механика куюв заводи” да қайта тиклаш кўзда тутилган.
                                    Лойиҳада поездлар ҳаракат хавфсизлиги, меҳнат мухофазаси, атроф муҳитни
                                    сақлаш, ёнилги энергия харажатларини тежаш кўзда тутилган.
                                </abbr>--}}
                            </p>
                        </div>
                        <div class="uztem-btn">
                            <a href="{{ route('modern_gallery') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="uztem-second">
                        <div class="uztem-second_img">
                            <img src="{{ asset('images/frontend_images/modern/2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="end-img">
                <img src="{{ asset('images/frontend_images/modern/end-img.png') }}" alt="">
            </div>
        </div>
        <div class="tem2">
            <div class="tem2-name">
                <h2>@lang('modern.tem')</h2>
            </div>
            <div id="links" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/modern/3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="all-gal">
                <a href="{{ route('tem_gallery') }}">вся галерея</a>
            </div>
            <div class="end-img">
                <img src="{{ asset('images/frontend_images/modern/end-img.png') }}" alt="">
            </div>
        </div>
        <div class="parts">
            <div class="parts-name">
                <h2>@lang('modern.tools')</h2>
            </div>
            <div id="links2" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/modern/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/modern/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/modern/1.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="buttons" style="display: flex; justify-content: center; align-items: center">
                <a id="btn-1" href="{{ url('/download/tools') }}"> <i class="fa fa-download" aria-hidden="true"></i>@lang('price.download')</a>
            </div>
            <div class="end-img">
                <img src="{{ asset('images/frontend_images/modern/end-img.png') }}" alt="">
            </div>
        </div>
    </div>

</section>

@include('frontend.frontLayout.front_footer')
<script src="{{ asset('/js/frontend_js/modern/jq.js') }}">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>


<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="{{ asset('/js/frontend_js/modern/owl.carousel.js') }}"></script>
<script src="{{ asset('/js/frontend_js/modern/script.js') }}"></script>
</body>
</html>