<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/yubiley/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/yubiley/owl.carusel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/yubiley/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/yubiley/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">
    <title>120 Юбилей</title>
</head>
<body onclick="hide_menu()">

@include('frontend.frontLayout.front_header')
    <section class="anniversary">
        <div class="container">
            <div class="anniversary-title">
                <h2>120 летний юбилей</h2>
            </div>
            <div class="anniversary-name">
                <h4>КЎП АСРЛИК, БАРҚАРОР ВА ЗАМОНАВИЙ КОРХОНА</h4>
            </div>
            <div class="anniversary-disc">
                <span>
                         Марказий Осиё тарихини қанчалик чуқур ва асосли ўрганилса, ушбу минтақанинг жаҳон маданияти ва маърифати ривожига <br>
                    беқиёс ҳисса қўшганлигининг гувоҳи бўламиз. Ўзбекистон пойтахти Тошкент шаҳри Марказий Осиё минтақаси иқтисодиёти ва <br>
                    саноати шаклланишининг қадимий марказларидан бири ҳисобланади. Бу шаҳарда асрлар давомида турли халқлар ва <br>
                    миллатлар тарихининг моҳиятини акс эттирувчи кўплаб саноат корхоналари жойлашган, уларнинг энг йирикларидан бири <br>
                    Тошкент тепловоз таъмирлаш корхонаси бўлиб, 2000 йилда у "Аср тенгдоши" фахрий номини олган.<br>
                    "O'ztemiryo'lmashta'mir" унитар корхонаси Ўзбекистон Республикасидаги энг кўҳна, Марказий Осиёда эса ўзига хос тарзда жадал <br>
                    ривожланаётган саноат корхоналаридан биридир. Бу ноёб тарихга эга бўлган республикамиздаги биринчи саноат<br>
                    корхоналаридан саналади.<br>
                    У ўз тарихи мобайнида ҳунармандчилик цехларидан тортиб, энг замонавий асбоб-ускуналар билан жиҳозланган қудратли<br>
                    саноат корхонасигача бўлган йўлни босиб ўтди. Тошкент тепловоз таъмирлаш заводи 1900 йил 10 май куни Ўрта Осиё темир<br>
                    йўлининг Бош устахонаси сифатида ташкил этилган бўлиб, бугунги кунда замонавий талабларга жавоб бера оладиган йирик<br>
                   саноат корхонасига айланди.
                </span>
            </div>
            {{--<div class="anniversary-button">
                <a href="#" style="font-size: 20px; font-weight: 600;">читать дальше...</a>
            </div>--}}

            <div class="anniversary-images">
                <a data-fancybox="gallery" href="{{ asset('images/frontend_images/yubiley/1.png') }}">
                    <img src="{{ asset('images/frontend_images/yubiley/1.png') }}" alt="">
                </a>
                <a data-fancybox="gallery" href="{{ asset('images/frontend_images/yubiley/2.png') }}">
                    <img src="{{ asset('images/frontend_images/yubiley/2.png') }}" alt="">
                </a>
                <a data-fancybox="gallery" href="{{ asset('images/frontend_images/yubiley/3.png') }}">
                    <img src="{{ asset('images/frontend_images/yubiley/3.png') }}" alt="">
                </a>
             </div>
            <div class="end-img">
                <img src="{{ asset('images/frontend_images/yubiley/end-img.png') }}" alt="">
            </div>
        </div>
    </section>


    @include('frontend.frontLayout.front_footer')

    <script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
    <script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
</body>
</html>