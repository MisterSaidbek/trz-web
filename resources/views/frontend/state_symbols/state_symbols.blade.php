<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@lang('home.symbols')</title>


    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/modern/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/modern/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/frontend_css/state_symbols/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/state_symbols/style.css') }}">

</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="symbols">
    <div class="container">
        <div class="symbols-title">
            <h2>@lang('home.symbols')</h2>
        </div>
        <div class="emblem">
            <div class="emblem-name">
                <h4>герб республики узбекистан</h4>
            </div>
            <div class="emblem-img">
                <img src="{{ asset('images/frontend_images/state_symbols/gerb1.png') }}" alt="">
            </div>
            <div class="emblem-disc">
                    <span>
                        Закон «О Государственном гербе Республики Узбекистан» принят 2 июля 1992 года на десятой сессии Верховного Совета <br>
                         Республики Узбекистан.
                    </span>
                <span>
                        В центре герба изображена птица Хумо с раскрытыми крыльями — символ счастья и свободолюбия. Наш великий предок Алишер <br>
                        Навои характеризовал птицу Хумо как самое доброе из всех живых существ.
                    </span>
                <span>
                        В верхней части герба находится восьмигранник, символизирующий знак утверждения республики, внутри -полумесяц со звездой.
                    </span>
                <span>
                        Изображение солнца — пожелание, чтобы путь нашего государства был озарен ярким светом. Одновременно оно указывает на <br>
                        уникальные природно-климатические условия республики.
                    </span>
                <span>
                        Колосья — символ хлеба насущного, стебли с раскрывающимися коробочками хлопка — главное богатство нашей солнечной Земли, <br>
                        прославившее ее во всем мире. Колосья и коробочки хлопка, перевитые лентой Государственного флага, означают консолидацию <br>
                        народов, проживающих в республике.
                    </span>
            </div>
        </div>
        <div class="flag">
            <div class="flag-name">
                <h4>флаг республики узбекистан</h4>
            </div>
            <div class="flag-img">
                <img src="{{ asset('images/frontend_images/state_symbols/flag.png') }}" alt="">
            </div>
            <div class="flag-disc">
                    <span>
                        Закон «О Государственном флаге Республики Узбекистан» принят 18 ноября 1991 года на восьмой сессии Верховного Совета <br>
                        Республики Узбекистан.
                    </span>
                <span>
                        Символика Государственного флага Республики Узбекистан продолжает лучшие традиции, свойственные флагам <br>
                        могущественных держав, существовавших на территории нашей страны, одновременно отражает природные особенности <br>
                        республики, национальную и культурную самобытность народа.
                    </span>
                <span>
                        Небесно-голубой цвет на флаге — символ голубого неба и чистой воды. Лазурный цвет почитаем на Востоке, его избрал когда-то <br>
                        для своего флага и великий Амир Тимур.
                    </span>
                <span>
                        Белый цвет — символ мира и чистоты. Молодое независимое государство должно преодолеть на своем пути высокие перевалы. <br>
                        Белый цвет на флаге означает доброе пожелание, чтобы путь был чист и светел.
                    </span>
                <span>
                        Зеленый цвет — олицетворение благодатной природы. В настоящее время во всем мире ширится движение по охране <br>
                        окружающей среды, символом которого тоже является зеленый цвет.
                    </span>
                <span>
                        Красные полосы — это жизненные силы, пульсирующие в каждом живом существе, символ жизни.
                    </span>
                <span>
                        Полумесяц соответствует многовековой традиции народа Узбекистана. Полумесяц и звезды — символ безоблачного неба мира. <br>
                        На нашем флаге 12 звезд. Число 12 считается знаком совершенства.
                    </span>
            </div>
        </div>
        <div class="gymn">
            <div class="gymn-main">
                <div class="gymn-name">
                    <h4>гимн республики узбекистан</h4>
                </div>
                <div class="gymn-img">
                    <img src="{{ asset('images/frontend_images/state_symbols/gerboflag.png') }}" alt="">
                </div>
                <div class="gymn-date">
                        <span>
                            Закон «О Государственном гимне Республики Узбекистан» принят 10 декабря 1992 года на одиннадцатой сессии Верховного Совета <br>
                            Республики Узбекистан.
                        </span>
                </div>
                <div class="gymn-img_footer">
                    <img src="{{ asset('images/frontend_images/state_symbols/end-img.png') }}" alt="">
                </div>
            </div>
            <div class="gymn-authors">
                <p><span>Музыка:</span> Мутала Бурханова</p>
                <p><span>Слова:</span> Абдуллы Орипова</p>
            </div>
            <div class="gymn-text">
                <div class="gymn-text_first">
                        <span>
                            Сeрқуёш ҳур ўлкам, элга баxт, нажoт, <br>
                            Сeн ўзинг дўстларга йўлдoш, мeҳрибoн! <br>
                            Яшнагай тo абад илму фан, ижoд, <br>
                            Шуҳратинг пoрласин тoки бoр жаҳoн!
                        </span>
                </div>
                <div class="gymn-text_second">
                        <span>
                            Oлтин бу вoдийлар — жoн Ўзбeкистoн, <br>
                            Аждoдлар мардoна руҳи сeнга ёр! <br>
                            Улуғ xалқ қудрати жўш урган замoн, <br>
                            Oламни маҳлиё айлаган диёр!
                        </span>
                </div>
                <div class="gymn-text_third">
                        <span>
                            Бағри кeнг ўзбeкнинг ўчмас иймoни, <br>
                            Эркин, ёш авлoдлар сeнга зўр қанoт! <br>
                            Истиқлoл машъали тинчлик пoсбoни, <br>
                            Xақсeвар, oна юрт, мангу бўл oбoд!
                        </span>
                </div>
                <div class="gymn-text_fourth">
                        <span>
                            Oлтин бу вoдийлар — жoн Ўзбeкистoн, <br>
                            Аждoдлар мардoна руҳи сeнга ёр! <br>
                            Улуғ xалқ қудрати жўш урган замoн, <br>
                            Oламни маҳлиё айлаган диёр!
                        </span>
                </div>
                <div id="end" class="gymn-img_footer">
                    <img src="{{ asset('images/frontend_images/state_symbols/end-img.png') }}" alt="">
                </div>
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
<script src="{{ asset('/js/frontend_js/state_symbols/script.js') }}"></script>
</body>
</html>