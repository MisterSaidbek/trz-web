<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@lang('header.about_company')</title>

    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/about/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/about/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/about/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/about/style.css') }}">
</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')

<section class="about">
    <div class="container">
        <div class="about-title">
            <h2>@lang('header.about_company')</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="about-header">
                    <span class="first"> УП «О'ztemiryo'lmashta'mir» является структурным предприятием</span>
                    <span>
                            АО «Узбекистон темир йуллари», который введен в портал реестр единых поставщиков по ремонту локомотивов  в Республики Узбекистан. Основной вид деятельности предприятия – капитальный и капитально-восстановительный ремонт подвижных составов, в частности:
                        </span>
                    <span> - капитального ремонта и капитально-восстановительного ремонта с продлением срока службы тепловозов всех серий;</span>
                    <span> - капитальный и капитально-восстановительный ремонт с продлением срока службы электровозов переменного тока ВЛ80С и ВЛ60К;</span>
                    <span> - капитальный ремонт грузовых вагонов;</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about-header_cont">
                    <span>- модернизация грузовых вагонов с продлением срока службы;</span>
                    <span>- капитальный ремонт электрических машин;</span>
                    <span>- формирование колёсных пар;</span>
                    <span>- восстановление тепловозных электродвигателей ЭД-118;</span>
                    <span>- ремонт агрегатов локомотивов;</span>
                    <span>- изготовления инструментов и всех видов оснасток;</span>
                    <span>- изготовления резинотехнических изделий;</span>
                    <span>- изготовления запасных частей для подвижного состава и верхнего строения пути.</span>
                    <span class="last-span"> УП «О'ztemiryo'lmashta'mir» имеет два дочерних предприятия:</span>
                    <div class="about-header_end">
                        <span>1. ДП «Литейно-механический завод»;</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-right">
                    <img src="{{ asset('/images/frontend_images/about/about.JPG') }}" alt="">
                </div>
            </div>
        </div>
        <div class="plant">
            <div class="plant-name">
                <span>Завод специализируется на:</span>
            </div>
            <div class="plant-disc">
                <span>- строительстве, капитальном ремонте и модернизации грузовых вагонов, в том числе цистерны-цементовозы и минераловозов;</span>
                <span>- производстве литейной продукции, выпуске чугунного, стального и цветного литья;</span>
                <span>- изготовлении запасных частей для ремонта подвижного состава и верхнего строения пути.</span>
            </div>
            <div class="plant-images">
                <div class="row">
                    <div class="col-md-4">
                        <div class="plant-images_first">
                            <img src="{{ asset('/images/frontend_images/about/about1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="plant-images_first">
                            <img src="{{ asset('/images/frontend_images/about/about2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="plant-images_first">
                            <img src="{{ asset('/images/frontend_images/about/about3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="plant-button">
                <a class="plant-btn" href="{{ route('lmz') }}">@lang('about.detail')</a>
            </div>
        </div>
        <div class="andijan">
            <div class="andijan-title">
                <span>2. ДП «Андижанский механический завод».</span>
            </div>
            <div class="andijan-name">
                <span>Завод специализируется на:</span>
            </div>
            <div class="andijan-disc">
                <span>- строительстве, капитальном ремонте, капитальном ремонте с продлением срока службы и модернизации грузовых вагонов;</span>
                <span>- изготовление нестандартного оборудования и запасных частей для грузовых вагонов.</span>
            </div>
            <div class="andijan-images">
                <div class="row">
                    <div class="col-md-4">
                        <div class="andijan-images_first">
                            <img src="{{ asset('/images/frontend_images/about/about4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="andijan-images_first">
                            <img src="{{ asset('/images/frontend_images/about/about5.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="andijan-images_first">
                            <img src="{{ asset('/images/frontend_images/about/about6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="plant-button">
                <a class="plant-btn" href="{{ route('amz') }}">@lang('about.detail')</a>
            </div>
        </div>
    </div>
</section>



<section class="history">
    <div class="container">
        <div class="history-title">
            <h2>@lang('about.history_main')</h2>
        </div>
        <div class="history-name">
                    <span>
                        @lang('about.history1') <br>
                        @lang('about.history2')
                    </span>
        </div>
        <div class="history-img">
            <img src="{{ asset('/images/frontend_images/about/end-img.png') }}" alt="">
        </div>
        <div class="history-second_img__main">
            <div class="history-second_img">
                <img src="{{ asset('/images/frontend_images/about/1.jpg') }}" alt="">
            </div>
        </div>
        <div class="history-img">
            <img src="{{ asset('/images/frontend_images/about/end-img.png') }}" alt="">
        </div>
        <div class="history-gallery">
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>1899-1900</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>Строительство мастерских началось в 1887 году. 1 января 1898 году</span><br>
                                в официальных документах уже упоминаются сведения о строительстве <br>
                                мастерских в ходе строительства железной дороги Самарканд – Андижан <br>
                                «с ветвью на Ташкент».
                            </p>
                            <p>
                                <span>10 мая 1900 года строители официально передали главные мастерские</span><br>
                                Управлению среднеазиатской железной дороги, положив начало<br>
                                созданию завода. После торжественного открытия под рукоплескания <br>
                                высших чиновников края и прибывших...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year1') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/about/h1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/about/h2.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>1900-1910</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>10 мая 1900 года строители официально передали главные мастерские</span><br>
                                Управлению среднеазиатской железной дороги, положив начало созданию<br>
                                завода. После торжественного открытия под рукоплескания высших <br>
                                чиновников края и прибывших на торжества железнодорожных
                            </p>
                            <p>
                                <span>генералов из Санкт-Петербурга была разбита традиционная бутылка</span> <br>
                                шампанского. Мастерские были предназначены для ремонта паровозов, <br>
                                вагонов, железнодорожных платформ и цистерн, а также...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year2') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>1910-1920</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>В 1912 году с развитием Среднеазиатской железной дороги</span><br>
                                значительно увеличивается и объём выпускаемой продукции, в связи <br>
                                с чем состоялось торжественное открытие нового Паровозного и<br>
                                механического цехов, котельной и
                            </p>
                            <p>
                                <span>На базе мастерских создается школа квалифицированных кадров</span><br>
                                железнодорожного транспорта. В сентябре 1921 года <br>
                                состоялся первый дорожный съезд рабочих-мусульман Среднеазиатской<br>
                                железной дороги...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year3') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/about/31.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/about/h4.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>1920-1930</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>Преподавали в школе кадровые рабочие, инженеры мастерских, видные</span><br>
                                учёные республики. Рабочую науку ребята проходили днём в мастерских, а <br>
                                общеобразовательные предметы изучали вечером в классах. <br>
                                Завод являлся крупнейшей и единственной ремонтной базой
                            </p>
                            <p>
                                <span>Здесь производился ремонт паровозов, грузовых и пассажирских</span> <br>
                                вагонов, а также изготовление запасных частей для железных дорог. <br>
                                Начав ремонт паровозов самой маломощной...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year4') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>1930-1940</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>В 1929 году на заводе при ремонте паровозов впервые в стране</span><br>
                                станок для обработки дерева, электрифицировали мостовой кран<br>
                                в электроцехе, улучшили работу пресса для испытания рессор, <br>
                                смастерили более совершенные патроны для...
                            </p>
                            <p>
                                <span>В ноябре 1932 года состоялся производственно-технический вечер,</span><br>
                                прошедший под девизом «В поход за рационализацию, за овладение <br>
                                техникой производства и за массово-техническое обучение» <br>
                                За 4 часа устроители вечера...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year5') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/about/h5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/about/h6.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>1941-1945</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>23 июня 1941 года 6.00 утра. До начала первой смены еще целых два</span><br>
                                часа. В обычный день в такую рань редко кого встретишь на заводе. <br>
                                Но в этот день сотни рабочих уже заполнили заводскую площадь. <br>
                                Посуровевшие лица, воспаленные от бессонницы глаза.
                            </p>
                            <p>
                                <span>К сентябрю 1941 года число ударников на заводе возрастает </span> <br>
                                до полутора тысяч человек. За короткое время завод осваивает производство <br>
                                различных видов боеприпасов, минометов, бронепоездов...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year6') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>1946-1960</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>Не прошло и двух месяцев, как была получена директива № 296815</span><br>
                                от 09.10.1944 года, указывающая бронепоезду-677 из 3-Украинского <br>
                                фронта прибыть во 2-Белорусский фронт в город Белосток, там бронепоезд <br>
                                занимался охраной железнодорожной...
                            </p>
                            <p>
                                <span>С августа 1945 года бронепоезд «Узбекистан» стоит во Львове на</span><br>
                                запасном пути как памятник, напоминающий новому поколению о жарких <br>
                                схватках с врагом. Еще два бронепоезда, изготовленные на нашем<br>
                                предприятии находятся в города...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year7') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/about/h7.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/about/h8.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>1960-1970</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>3 ноября 1967 года на заводской площади была установлена двухметровая</span><br>
                                мраморная стелла. На ней золотыми буквами высечены имена <br>
                                заводчан, павших смертью храбрых на фронтах Второй мировой войны. <br>
                                Бьется на ветру огонь вечной славы.
                            </p>
                            <p>
                                <span>К сожалению, время неумолимо и ветераны уходят от нас в бессмертие,</span> <br>
                                и мы вспоминаем их имена с глубокой благодарностью. <br>
                                Это - героическое поколение победителей, благодаря...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year8') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>1970-1980</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>1967 год. 3 августа состоялось торжественное открытие Музея </span><br>
                                истории завода. В его создании участвовали сотни рабочих и инженеров. <br>
                                Многие музейные экспонаты изготовлены на заводе.<br>
                                Музей истории завода посетили тысячи узбекистанцев
                            </p>
                            <p>
                                <span>1976 год в августе состоялось торжественное открытие детского</span><br>
                                оздоровительного лагеря «Красновосточник» для детей <br>
                                работников предприятия. 1979 год. Разработан и утверждён <br>
                                проект реконструкции завода...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year9') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/about/h9.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/about/h10.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>1980-1990</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>1980 год. Подрядная организация СМП6 23 «Средазтрансстрой»</span><br>
                                приступила к реконструкции завода. 1981 год. Реконструкция <br>
                                предусматривала полное решение проблем для ремонта современных <br>
                                тепловозов и электровозов и увеличение объёмов и качества.
                            </p>
                            <p>
                                <span>1985 год вошел в историю завода как год пуска нового электромашинного</span> <br>
                                цеха, предназначенного для ремонта всех видов электрических<br>
                                машин, используемых в подвижном в составе...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year10') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>1990-2000</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>1995 год. В связи с электрификацией, реконструкцией и</span><br>
                                модернизацией железной дороги для перевода с тепловозной <br>
                                на электровозную тягу на предприятии освоен ремонт электровозных <br>
                                колесных пар с полным освидетельствованием.
                            </p>
                            <p>
                                <span>Осваивается капитальный ремонт тепловозов серии ЧМЭ-3. 2000 год.</span><br>
                                ПО «Узжелдорреммаш» отметило свой вековой юбилей. <br>
                                Первый Президент Республики Узбекистан Ислам Каримов поздравил <br>
                                коллектив производственного...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year11') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/about/h11.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/about/h12.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>2000-2010</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>2000 год. ПО «Узжелдорреммаш» отметило свой вековой юбилей.</span><br>
                                На ПО «Узжелдорреммаш» впервые в Узбекистане и во всей Средней <br>
                                Азии совместно со специалистами завода «АЗОВМАШ» и ООО <br>
                                «Сереп» (Украина) была произведена крупно-узловая сборка первых.
                            </p>
                            <p>
                                <span>На основании постановления Кабинета Министров Республики</span> <br>
                                збекистан от 24 октября 2003 года за № 464 на базе ООО «Иргидромаш» <br>
                                образован ДП «Литейно-механический завод» АО «Узбекистон темир...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year12') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>2010-2020</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>2012 год. Во исполнение постановления Президента Республики</span><br>
                                Узбекистан от 21 февраля 2012 года за № ПП-1712 «О мерах по <br>
                                реализации инвестиционного проекта «Электрификация железнодорожного <br>
                                участка Карши – Термез»
                            </p>
                            <p>
                                <span>В клубе завода в 2017 году состоялось открытие 31 театрального</span><br>
                                сезона Государственного Узбекского театра сатиры, знакомство <br>
                                с творчеством артистов во главе с народным артистом Республики <br>
                                Узбекистан Хайрулло Садиевым...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('year13') }}">@lang('about.read_more')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/about/h13.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="history-end_btn">
            <a href="{{ route('his_gallery') }}">@lang('about.his_gallery')</a>
        </div>
        <div class="history-img">
            <img src="{{ asset('/images/frontend_images/about/end-img.png') }}" alt="">
        </div>
    </div>
</section>


<section class="manual">
    <div class="container">
        <div class="manual-title">
            <h2>@lang('about.leadership')</h2>
        </div>
        <div class="manual-cards">
            <div class="row">
                <div class="col-md-6">
                    <div class="idcard">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="idcard-img">
                                    <img src="{{ asset('/images/frontend_images/about/ruk1.jpg') }}" alt="" id="glavniy_direktor" style="pointer-events:none; -moz-user-select: none; -webkit-user-select: none; -ms-user-select: none; user-select: none;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="idcard-disc">
                                    <div class="idcard-name">
                                        <h3>
                                            Абдуллаев Нусратилло <br>
                                            Саъдуллаевич
                                        </h3>
                                    </div>
                                    <div class="idcard-job">
                                        <span>@lang('about.director')</span>
                                    </div>
                                    <ul class="idcard-data">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> 99871 237-88-85</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> infouptrz@gmail.com</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> Среда, с 14:00 по 16:00</li>
                                    </ul>
                                    <div class="idcard-link">
                                        <a href="#">@lang('about.biography')</a>
                                        <a href="#">@lang('about.duty')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="idcard">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="idcard-img">
                                    <img src="{{ asset('/images/frontend_images/about/ruk2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="idcard-disc">
                                    <div class="idcard-name">
                                        <h3>
                                            Халиков Кадирхон <br>
                                            Усарович
                                        </h3>
                                    </div>
                                    <div class="idcard-job">
                                        <span>@lang('about.engineer')</span>
                                    </div>
                                    <ul class="idcard-data">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> 99871 237-88-85</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> infouptrz@gmail.com</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> Среда, с 14:00 по 16:00</li>
                                    </ul>
                                    <div class="idcard-link">
                                        <a href="#">@lang('about.biography')</a>
                                        <a href="#">@lang('about.duty')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="idcard">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="idcard-img">
                                    <img src="{{ asset('/images/frontend_images/about/ruk3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="idcard-disc">
                                    <div class="idcard-name">
                                        <h3>
                                            Юсупходжаев Алишер <br>
                                            Валерьевич
                                        </h3>
                                    </div>
                                    <div class="idcard-job">
                                        <span>Председатель профсоюзного коммитета</span>
                                    </div>
                                    <ul class="idcard-data">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> 99871 237-88-85</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> infouptrz@gmail.com</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> Среда, с 14:00 по 16:00</li>
                                    </ul>
                                    <div class="idcard-link">
                                        <a href="#">@lang('about.biography')</a>
                                        <a href="#">@lang('about.duty')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="idcard">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="idcard-img">
                                    <img src="{{ asset('/images/frontend_images/about/ruk4.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="idcard-disc">
                                    <div class="idcard-name">
                                        <h3>
                                            Мухаммадинов Сахад <br>
                                            Рузиевич
                                        </h3>
                                    </div>
                                    <div class="idcard-job">
                                            <span>Заместитель генерального директора по <br>
                                            производству</span>
                                    </div>
                                    <ul class="idcard-data">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> 99871 237-88-85</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> infouptrz@gmail.com</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> Среда, с 14:00 по 16:00</li>
                                    </ul>
                                    <div class="idcard-link">
                                        <a href="#">@lang('about.biography')</a>
                                        <a href="#">@lang('about.duty')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="idcard">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="idcard-img">
                                    <img src="{{ asset('/images/frontend_images/about/ruk5.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="idcard-disc">
                                    <div class="idcard-name">
                                        <h3>
                                            Жуманиязов Ахмеджон <br>
                                            Бобожанович
                                        </h3>
                                    </div>
                                    <div class="idcard-job">
                                        <span>Заместитель генерального директора по<br>
                                        коммерческим вопросам</span>
                                    </div>
                                    <ul class="idcard-data">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> 99871 237-88-85</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> infouptrz@gmail.com</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> Среда, с 14:00 по 16:00</li>
                                    </ul>
                                    <div class="idcard-link">
                                        <a href="#">@lang('about.biography')</a>
                                        <a href="#">@lang('about.duty')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="idcard">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="idcard-img">
                                    <img src="{{ asset('/images/frontend_images/about/ruk6.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="idcard-disc">
                                    <div class="idcard-name">
                                        <h3>
                                            Рухутдинов Шухрат <br>
                                            Комилжонович
                                        </h3>
                                    </div>
                                    <div class="idcard-job">
                                            <span>Заместитель генерального директора <br>
                                             </span>
                                    </div>
                                    <ul class="idcard-data">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> 99871 237-88-85</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> infouptrz@gmail.com</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> Среда, с 14:00 по 16:00</li>
                                    </ul>
                                    <div class="idcard-link">
                                        <a href="#">@lang('about.biography')</a>
                                        <a href="#">@lang('about.duty')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="idcard">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="idcard-img">
                                    <img src="{{ asset('/images/frontend_images/about/ruk7.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="idcard-disc">
                                    <div class="idcard-name">
                                        <h3>
                                            Раматов Нурбек <br>
                                            Озатович
                                        </h3>
                                    </div>
                                    <div class="idcard-job">
                                        <span>Заместитель генерального директора по<br>
                                            экономике и финансам</span>
                                    </div>
                                    <ul class="idcard-data">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> 99871 237-88-85</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> infouptrz@gmail.com</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> Среда, с 14:00 по 16:00</li>
                                    </ul>
                                    <div class="idcard-link">
                                        <a href="#">@lang('about.biography')</a>
                                        <a href="#">@lang('about.duty')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="history-img">
                <img src="images/end-img.png" alt="">
            </div>
        </div>
    </div>
</section>
@include('frontend.frontLayout.front_footer')
{{--<script>
 var block = document.getElementsByTagName('img');
 block.oncontextmenu = function(){
    this.style.width = '150px';
 }
</script>--}}
<script>
    document.getElementsById('glavniy_direktor').ondragstart = noselect();
    document.getElementsById('glavniy_direktor').oncontextmenu = noselect();
    document.getElementsById('glavniy_direktor').onselectstart = noselect();
    function noselect() {return false;}
</script>
<script src="{{ asset('/js/frontend_js/about/jq.js') }}">
</script>

<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{ asset('/js/frontend_js/about/owl.carousel.js') }}"></script>
<script src="{{ asset('/js/frontend_js/about/script.js') }}"></script>
</body>
</html>