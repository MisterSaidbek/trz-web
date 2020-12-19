<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@lang('header.manufacture_page')</title>

    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/manufacture/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/manufacture/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/manufacture/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/manufacture/style.css') }}">

</head>
<body>
@include('frontend.frontLayout.front_header')
<section class="history">
    <div class="container">
        <div class="history-title">
            <h2>@lang('header.manufacture_page')</h2>
        </div>
        <div class="history-gallery">
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>ЛОКОМОТИВНО-СБОРОЧНЫЙ ЦЕХ</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                            <span>Локомотивосборочный цех является основным цехом предприятия в</span> <br>
                            котором выполняется ремонт тепловозов, электровозов и вагонов <br>
                            с действующим «Правилами заводского ремонта», а так же модернизация <br>
                            локомотивов и вагонов. В цехе производится: <br>
                            </p>
                            <p>
                            <span>Разборка тепловозов и электровозов которое выполняют работы;</span> <br>
                            Очистка, мойка и ремонт кузова тепловоза и электровоза, трубопроводов, <br>
                            теплообменника, резервуара, коллектора, фильтры грубой очистки, фильтры <br>
                            тонкой очистки, фильтры надувочного воздуха и т.д.
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('factory1') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('images/frontend_images/manufacture/c1.JPG') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('images/frontend_images/manufacture/c21.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>ЭЛЕКТРОМАШИННЫЙ ЦЕХ</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                            
                                <span>Электромашинный цех предназначен для капитального ремонта</span><br>
                                тяговых генераторов, электродвигателей, двухмашинных агрегатов <br>
                                и других вспомогательных электрических машин тепловозов и электровозов. <br>
                                Ремонт электрических машин по степени износа или повреждений деталей
                            </p>
                            <p>
                                <span>При необходимости смены обмоток якоря электрические машины</span> <br>
                                ремонтируют по тре-бованиям КР-2. В состав электромашинного цеха <br>
                                по потоку ремонта тяговых электродвигателей
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('factory2') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>ЭЛЕКТРОАППАРАТНЫЙ ЦЕХ</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>В ЭАЦ согласно «Правил заводского ремонта тепловозов и электровозов»</span><br>
                                производятся следующие работы: -разборка и ремонт, установка и <br>
                                подключение электрооборудования тепловоза и электровоза; -демонтаж <br>
                                заготовка новых эл.проводов.
                            </p>
                            <p>
                                <span>Электромонтажников - схемщиков производит ремонт электрических</span><br>
                                проводов пульта управления кабины машиниста тепловоза, <br>
                                заготовку новых проводов, распайку штепсельных разъемов, монтаж <br>
                                новых проводов.
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('factory3') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('images/frontend_images/manufacture/c31.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('images/frontend_images/manufacture/c41.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>ДИЗЕЛЬНЫЙ ЦЕХ</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>Дизельный цех является самостоятельной производственно</span><br>
                                - хозяйственной единицей завода, действующей на основе арендного <br>
                                подряда. Дизельный цех является основным цеха завода <br>
                                и предназначен для выполнения всех видов заводского ремонта
                            </p>
                            <p>
                                <span>«Правилами заводского ремонта» серии 10Д100, Д50, 5Д49, K6S310DR,</span> <br>
                                дизелей ЯМЗ, Д6 и т.д. В цехе производится: A) Разборка дизеля<br>
                                Б) Очистка и мойка дизеля, деталей и узлов дизеля...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('factory4') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>РЕМОНТНО-КОМПЛЕКТОВОЧНЫЙ ЦЕХ</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>Ремонтно-комплектовочный цех является самостоятельным структурным</span><br>
                                производственно-хозяйственным подразделением предприятия, возглавляется <br>
                                начальником цеха и подчиняется в своей деятельности начальнику <br>
                                производственно-диспетчерского отдела.
                            </p>
                            <p>
                                <span>Ремонтно-комплектовочный цех состоит из участка</span><br>
                                металлообработки, служебных и бытовых помещений. <br>
                                Ремонтно- комплектовочный цех предназначен для выполнения <br>
                                следующих работ...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('factory5') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('images/frontend_images/manufacture/c51.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('images/frontend_images/manufacture/c61.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>КУЗНЕЧНО-ПРЕССОВЫЙ ЦЕХ</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>Располагает большим парком кузнечно-прессового оборудования:</span><br>
                                молоты, пресса, горизонтально-ковочные машины, станок для навивки <br>
                                пружин. В цехе имеются термический, гальванический участки. <br>
                                Выпускает в большом ассортименте поковки различной формы...
                            </p>
                            <p>
                                <span>Производится термообработка деталей и их покрытие гальваническим</span> <br>
                                способом. Производят изготовление отливок тормозных колодок <br>
                                и запасных частей для тепловозов, электровозов, вагонов...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('factory6') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>ИНСТРУМЕНТАЛЬНО-МЕХАНИЧЕСКИЙ ЦЕХ</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>Производит изготовление и механическую обработку</span><br>
                                комплектующих деталей. Выпускает запасные части для <br>
                                основного производства, а так же инструмент, <br>
                                штампы, пресс-формы, модели.
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('factory7') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('images/frontend_images/manufacture/c71.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('images/frontend_images/manufacture/c81.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>КОЛЕСНЫЙ ЦЕХ</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>Колесный цех является самостоятельным структурным производственно-</span><br>
                                хозяйственным подразделением предприятия которое подчиняется <br>
                                в своей деятельности начальнику производственно-диспетчерском отдела. <br>
                                Колесный цех является основным цехом предприятия...
                            </p>
                            <p>
                                <span>Колесный цех состоит из производственных участков, служебных</span> <br>
                                и бытовых помещений. В соответствии с этим в число производственного <br>
                                отделения колесного цеха входят следующие...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('factory8') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>РЕМОНТНО-МЕХАНИЧЕСКИЙ ЦЕХ</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>Производит капитальный ремонт технологического оборудования</span><br>
                                предприятия; - изготавливает нестандартное оборудование, <br>
                                средства малой механизации, детали и узлы подвижного состава; <br>
                                изготовление стропальной оснастки для грузоподъёмных механизмов
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('factory9') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('images/frontend_images/manufacture/c91.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="history-end_btn">
            <img src="{{ asset('images/frontend_images/manufacture/end-img.png') }}" alt="">
        </div>
    </div>
</section>

@include('frontend.frontLayout.front_footer')




<script src="{{ asset('js/frontend_js/manufacture/jq.js') }}">
</script>

<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{ asset('js/frontend_js/manufacture/owl.carousel.js') }}"></script>
<script src="{{ asset('js/frontend_js/manufacture/script.js') }}"></script>
</body>
</html>