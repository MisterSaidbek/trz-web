<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('commities.burch')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('burch/plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('burch/plugins/owlcarousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('burch/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('burch/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
@include('frontend.frontLayout.front_header')
<section class="gallery">
    <div class="container">
        <div class="gallery-title">
            <h2>@lang('home.gallery')</h2>
        </div>
        <div class="gallery-name">
            <h4>
                Детский оздоровительный лагерь <br>
                "@lang('commities.burch')"
            </h4>
        </div>
        <div class="gallery-disc">
            <div class="gallery-disc_first">
                <span></span>
            </div>
        </div>
        <div class="gallery-disc">
            <div class="disc-first">
                <p>
                    <span>Наш лагерь находится в горном ущелье Бурчи-Мулло Бостанлыкского района Ташкентской области – 110 км от города Ташкента. Лагерь очень</span> <br>
                    компактный, зелёный, со всеми условиями и улучшенными планировками. <br>
                    <span>Вместимость лагеря рассчитана на 320 детей в возрасте от 7 до 14 лет. Предусмотрены 4 смены, продолжительность каждой смены составляет</span> <br>
                    двенадцать дней. <br>
                    <span>Отправляя ребёнка в летний оздоровительный лагерь, родители должны позаботиться о наличии всех необходимых вещей: гигиенический набор;</span> <br>
                    необходимое количество одежды (для торжественных мероприятий, юбка или шорты, спортивная обувь, кепка, комплект обуви и одежды для бассейна, <br>
                    теплая одежда, комнатные тапочки, носовые платки).
                </p>
            </div>
            <div class="disc-second">
                <div class="second-title">
                    <h3>Руководством УП «Узтемирйулмаштаъмир» созданы благоприятные условия для комфортного пребывания детей:</h3>
                </div>
                <ul class="second-menu">
                    <li>- восемь жилых корпусов с санузлами и душевыми;</li>
                    <li>- современная столовая с 4-разовым питанием;</li>
                    <li>- площадка для активных игр на свежем воздухе;</li>
                    <li>- площадка для общелагерных мероприятий;</li>
                    <li>- футбольное поле и плавательный бассейн;</li>
                    <li>- круглосуточное дежурство специализированной охраны, медицинских работников и пожарной бригады.</li>
                </ul>
                <div class="second-menu">
                        <span>
                            Мы здесь одна большая, дружная семья. И все мероприятия, проводимые в лагере, направлены на все стороннее развитие и воспитание здорового <br>
                            молодого поколения. Так же интересные занятия проводятся в кружках, дети с удовольствием посещают  их, дети учатся рисованию, пению, английскому <br>
                            языку. На каждую смену приглашаются лучшие хореографы Ташкента, чтобы зарядить детей энергией танца. В библиотеке лагеря имеется большой <br>
                            ассортимент детской литературы. Ребятам очень нравится наш лагерь и они снова и снова приезжают сюда.</span>
                </div>
                <div class="second-end">
                    <div class="second-end_title">
                        <h3>кружки:</h3>
                    </div>
                    <div class="second-end_disc">
                        <ul class="second-end_disc__first">
                            <li>1. Английский язык </li>
                            <li>2. «Маънавиат ва Маърифат»  </li>
                            <li>3. Библиотека</li>
                            <li>4. Живопись</li>
                            <li>5. Бисероплетение</li>
                            <li>6. Юный корреспондент</li>
                        </ul>
                        <ul class="second-end_disc__second">
                            <li>7. Макраме</li>
                            <li>8. Мягкая игрушка</li>
                            <li>9. Караоке</li>
                            <li>10. Умелые руки</li>
                            <li>11. Спортивные кружки</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-images">
            <a data-fancybox="gallery" href="{{asset('burch/images/1.jpg')}}">
                <img src="{{asset('burch/images/1.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/2.jpg')}}">
                <img src="{{asset('burch/images/2.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/3.jpg')}}">
                <img src="{{asset('burch/images/3.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/4.jpg')}}">
                <img src="{{asset('burch/images/4.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/5.jpg')}}">
                <img src="{{asset('burch/images/5.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/6.jpg')}}">
                <img src="{{asset('burch/images/6.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/7.jpg')}}">
                <img src="{{asset('burch/images/7.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/8.jpg')}}">
                <img src="{{asset('burch/images/8.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/9.jpg')}}">
                <img src="{{asset('burch/images/9.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/10.jpg')}}">
                <img src="{{asset('burch/images/10.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/11.jpg')}}">
                <img src="{{asset('burch/images/11.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/12.jpg')}}">
                <img src="{{asset('burch/images/12.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/13.jpg')}}">
                <img src="{{asset('burch/images/13.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/14.jpg')}}">
                <img src="{{asset('burch/images/14.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/15.jpg')}}">
                <img src="{{asset('burch/images/15.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/16.jpg')}}">
                <img src="{{asset('burch/images/16.jpg')}}" alt="">
            </a>
            <a data-fancybox="gallery" href="{{asset('burch/images/17.jpg')}}">
                <img src="{{asset('burch/images/17.jpg')}}" alt="">
            </a>
        </div>
    {{--    <div class="gallery-button">
            <a href="#">посмотреть больше</a>
        </div>--}}
        <div class="end-img">
            <img src="{{asset('burch/images/end-img.png')}}" alt="">
        </div>
    </div>
</section>
@include('frontend.frontLayout.front_footer')





<script src="{{ asset('js/frontend_js/komitets/jquery.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/komitets/fancybox.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="{{asset('assets/slick/slick.js')}}"></script>
    <script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
    <script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>
</html>

