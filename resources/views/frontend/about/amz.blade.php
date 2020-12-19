<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@lang('about.amz')</title>
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/lmz/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/lmz/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/lmz/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/about/amz/style.css') }}">
</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="amz">
    <div class="container">
        <div class="amz-title">
            <h2>@lang('about.amz')</h2>
        </div>
        <div class="amz-name">
            <h3>локомотивно-сборочный цех</h3>
        </div>
        <div id="links" class="owl-carousel owl-theme">
            <div class="item">
                <div class="item-img">
                    <img src="{{ asset('images/frontend_images/about/amz/1.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="{{ asset('images/frontend_images/about/amz/2.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="{{ asset('images/frontend_images/about/amz/3.jpg') }}" alt="">
                </div>
            </div>
        </div>
      {{--  <div class="amz-btn">
            <a href="#">вся галерея</a>
        </div>--}}
        <div class="amz-text_name">
            <h3>назначение в локомотивосборочном цехе</h3>
        </div>
        <div class="amz-img">
            <img src="{{ asset('images/frontend_images/about/amz/end-img.png') }}" alt="">
        </div>
        <div class="amz-text_disc">
                    <span>
                        Дочернее предприятие "Андижанский механический завод" включает в себя два завода, объединенных в одно предприятие. Андижанский <br>
                        механический завод – головное предприятие, расположенное в г. Андижане, представляет собой комплекс производственных подразделений, <br>
                        направленных на производство нестандартного оборудования, запасных частей, переработку пиломатериалов и изготовление деревянных деталей для <br>
                        ремонта крытых вагонов, производство товаров народного потребления. Первый пусковой комплекс завода введен в эксплуатацию в 1987 году. Вторым <br>
                        заводом в составе Андижанского механического завода является Пахтаабадский вагоноремонтный завод, спроектированный УП "O’ztemiry’olmashta’mir", <br>
                        как механический завод по производству запасных частей для ремонта подвижного состава и производства вагонов и цистерн. Первый пусковой <br>
                        комплекс был введен в эксплуатацию в 1989 году, и как механический завод он просуществовал до 1994 года. В 1994 году в связи с необходимостью <br>
                        ремонта подвижного состава Республики Узбекистан, Пахтаабадский завод был реорганизован в вагоноремонтный завод по ремонту нефтеналивных <br>
                        цистерн, полувагонов, крытых вагонов, платформ, автомобиле возов. <br>
                        Производственно-организационная структура ДП "Андижанский механический завод" включает в себя цехи и участки многопрофильного <br>
                        производства: вагоноремонтный, механосборочный, механический, кузнечно-прессовый, деревообрабатывающий цех, ремонтно-комплектовочный, <br>
                        ремонтно-строительный, транспортный, паросиловой, инструментальный и авторемонтный участок. В 1997 году были переоборудованы 2-х ярусные <br>
                        платформы в крытые автомобиле возы. В последние годы освоено производство электромеханических домкратов грузоподъемностью 160 тонн, путевых <br>
                        гидравлических домкратов типа ДГП-8 грузоподъемностью 8 тонн, рельсоразгоночных станков РСГ-1, рельсомонтажных портальных кранов ПСК-1С <br>
                        грузоподъемностью 1 тонна.  С целью увеличения объемов производства началось освоение капитального и деповского ремонта цистерн и полувагонов. <br>
                        Совместно с   УП «O'ztemiryo'lmashta'mir» Андижанский механический завод освоил строительство вагонов-цистерн для перевозки нефтепродуктов и <br>
                        приступил к капитально-восстановительному ремонту цистерн с продлением срока службы на 5 и 16 лет, полувагонов – на 11 лет, крытых вагонов – на 5 <br>
                        лет. В 2006 году освоен ремонт с продлением срока службы на 16 лет крытых грузовых вагонов. <br>
                        Дочернее предприятие <br>
                        «Андижанский механический завод»
                    </span>
        </div>
{{--        <div class="amz-btn">
            <a href="#">читать дальше</a>
        </div>--}}
        <div class="manual">
            <div class="manual-title">
                <h2>Руководство</h2>
            </div>
            <div class="manual-cards">
                <div class="idcard">
                    <div class="idcard-name">
                        <h3>
                            Аюбжонов Зайнобиддин <br>
                            Мирзаолимович
                        </h3>
                    </div>
                    <div class="idcard-job">
                    <span>
                        Генеральный директор
                    </span>               
                    </div>
                    <ul class="idcard-data">
                    <li><i class="fa fa-phone" aria-hidden="true"></i> +998(74) 223-57-04</li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@amz.uz</li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i> Среда 15:00 - 16:00</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="amz-img">
            <img src="{{ asset('images/frontend_images/about/amz/end-img.png') }}" alt="">
        </div>
    </div>
</section>

@include('frontend.frontLayout.front_footer')


<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="{{ asset('js/frontend_js/about/amz/jq.js') }}">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{ asset('js/frontend_js/about/amz/owl.carousel.js') }}"></script>
<script src="{{ asset('js/frontend_js/about/amz/script.js') }}"></script>
</body>
</html>