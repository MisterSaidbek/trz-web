<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>литейно-механический завод</title>

    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/lmz/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/lmz/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/lmz/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/lmz/style.css') }}">
</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="lmz">
    <div class="container">
        <div class="lmz-title">
            <h2>дп литейно-механический завод</h2>
        </div>
        <div class="lmz-name">
            <h3>литейно-механический завод</h3>
        </div>
        <div id="links" class="owl-carousel owl-theme">
            <div class="item">
                <div class="item-img">
                    <img src="{{ asset('images/frontend_images/about/lmz/1.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="{{ asset('images/frontend_images/about/lmz/2.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="{{ asset('images/frontend_images/about/lmz/3.jpg') }}" alt="">
                </div>
            </div>
        </div>
  {{--      <div class="lmz-btn">
            <a href="#">вся галерея</a>
        </div>--}}
        <div class="lmz-text_name">
            <h3>назначение в локомотивосборочном цехе</h3>
        </div>
        <div class="lmz-img">
            <img src="{{ asset('images/frontend_images/about/lmz/end-img.png') }}" alt="">
        </div>
        <div class="lmz-text_disc">
                <span>
                    Локомотивосборочный цех является основным цехом предприятия в котором выполняется ремонт тепловозов, электровозов и вагонов в соответствии с <br>
                    действующим «Правилами заводского ремонта», а так же модернизация локомотивов и вагонов. <br>
                    В цехе производится: <br>
                    А) Разборка тепловозов и электровозов которое выполняются следующие работы; <br>
                    Очистка, мойка и ремонт кузова тепловоза и электровоза, трубопроводов,  секции радиатора, теплообменника, резервуара, коллектора, фильтры грубой <br>
                    очистки, фильтры тонкой очистки, фильтры надувочного воздуха, капоты, автосцепного устройства, приборы тормоза, вентилей, клапаны, жалюзи, мойка <br>
                    производится в моечной машине, окраска тепловозов, электровозов и т.д. <br>
                    Б) Общая сборка тепловозов и окраска <br>
                    В) Испытание тепловозов и электровозов. <br>
                    В соответствии с этим в число производственного отделения локомотивосборочного цеха входят следующие участки, в которых находятся 15 участков.
                </span>
        </div>
        <ul class="lmz-text_end">
            <li>1. Разборка тепловозов.</li>
            <li>2. Ремонт рамы кузова</li>
            <li>3. Ремонт капоты и фильтры надувочного воздуха</li>
            <li>4. Ремонт теплообменника и резервуаров</li>
            <li>5. Ремонт жалюзи </li>
            <li>6. Ремонт и испытания коллекторов</li>
            <li>7. Участка трубопровода </li>
            <li>8. Участка автоматика</li>
            <li>9. Ремонт секции радиатора и калорифера </li>
            <li>10. Сборка и центровка агрегатов</li>
            <li>11. Ремонт и сборка вагонов </li>
            <li>12.	Участка автотормозной контрольный пункт</li>
            <li>13.	Участка контрольный пункт автосцепки</li>
            <li>14.	Малярная участка</li>
            <li>15. Реостатная участка</li>
        </ul>
        <div class="manual">
            <div class="manual-title">
            <h2>Руководство</h2>
            </div>
            <div class="manual-cards">
                <div class="row">
                    <div class="col-md-6">
                        <div class="idcard">
                            <div id="idcard1" class="idcard-disc">
                                <div class="idcard-name">
                                    <h3>
                                        Рашидов Камолиддин <br>
                                        Турсуналиевич
                                    </h3>
                                </div>
                                <div class="idcard-job">
                                    <span>
                                        Директор ДП «Литейно- <br>
                                        механического завода»
                                    </span>
                                </div>
                                <ul class="idcard-data">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> +(998) 71 295-21-94</li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> qmz@mail.ru</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> четверг 14:00 - 16:00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="idcard">
                            <div id="idcard2" class="idcard-disc">
                                <div class="idcard-name">
                                    <h3>
                                        Махмудов Отабек <br>
                                        Гуломович
                                    </h3>
                                </div>
                                <div class="idcard-job">
                                    <span>Главный инженер</span>
                                </div>
                                <ul class="idcard-data">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> +(998) 71 295-03-59</li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> qmz@mail.ru</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lmz-img">
            <img src="{{ asset('images/frontend_images/about/lmz/end-img.png') }}" alt="">
        </div>
    </div>
</section>

@include('frontend.frontLayout.front_footer')


<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



<script src="{{ asset('js/frontend_js/about/lmz/jq.js') }}">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{ asset('js/frontend_js/about/lmz/owl.carousel.js') }}"></script>
<script src="{{ asset('js/frontend_js/about/lmz/script.js') }}"></script>
</body>
</html>