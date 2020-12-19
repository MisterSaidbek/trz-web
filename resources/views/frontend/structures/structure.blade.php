<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@lang('header.structure_page')</title>

    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/structure/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/structure/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend_css/structure/style.css') }}">
</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="history">

    <div class="container">
        <div class="history-title">
            <h2>@lang('header.structure_page')</h2>
        </div>
        <div class="history-gallery">
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('images/frontend_images/structure/OGT1.JPG') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>Отдел главного технолога</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>1.2. Проведение не предусмотренных утвержденным технологическим</span><br>
                                процессом выборочных проверок качества отремонтированного<br>
                                подвижного состава, их узлов, агрегатов, других объектов<br>
                                ремонта, а также изготовленной готовой продукции,
                            </p>
                            <p>
                                <span>выполнения отдельных технологических операций и переходов,</span> <br>
                                а также другие проверки, необходимые для обеспечения выпуска <br>
                                продукции в соответствии с установленными требованиями...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure1') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>Отдел главного конструктора</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>2.1. Разработка проектов новых опытных и промышленных установок,</span><br>
                                нестандартного оборудование и приспособлений в связи с реконструкцией<br>
                                объектов, автоматизацией и механизацией трудоемких процессов <br>
                                с указанием требований безопасности.
                            </p>
                            <p>
                                <span>2.2. Разработка эскизных, технических и рабочих проектов особо</span><br>
                                сложных, сложных и средней сложности изделий, обеспечивая<br>
                                при этом соответствие разрабатываемых конструкций техническим <br>
                                заданиям, стандартам...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure2') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/structure/OGK1.JPG') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/structure/OGM1.jpg') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>Отдел главного механика</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>Выполнение работ согласно плана графика планово-предупредительного</span><br>
                                ремонта, организационно-технических мероприятий и плановых заданий. <br>
                                Обеспечение эффективной эксплуатации и сохранности оборудования, <br>
                                инструмента, технологической оснастки, энергетического хозяйства...
                            </p>
                            <p>
                                <span>В годы Второй мировой войны на заводе изготавливались бронепоезда,</span> <br>
                                вагоны специального назначения, санитарные поезда, поезда «Водрем», <br>
                                авиабомбы, снаряды, миномёты, ручные  гранаты.
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure3') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>Отдел главного энергетика</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>Отдел главного энергетика осуществляет руководство эксплуатацией</span><br>
                                общезаводских энергетических установок, межцеховых коммуникаций,<br>
                                а также ведет технический надзор за состоянием внутрицехового <br>
                                оборудования.
                            </p>
                            <p>
                                <span>Основными задачами отдела главного энергетика являются:</span><br>
                                1. Бесперебойное и качественное снабжение завода электроэнергией,<br>
                                газом, сжатым воздухом, водой и другими видами энергии в количествах, <br>
                                обеспечивающих выполнение производственного...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure4') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/structure/OGE.JPG') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/structure/PDO.JPG') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>Производственно диспетчерский отдел</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>1.1. Организация ритмичной работы цехов и предприятия в целом.</span><br>
                                1.2. Систематическое совершенствование производства. 1.3. Обеспечение <br>
                                цехов ремонтным фондом. 1.4. Своевременное заключение договоров, <br>
                                обеспечение заказами на разработанный план производства.
                            </p>
                            <p>
                                <span>1.5. Разработка годовых и квартальных производственных программ</span> <br>
                                по объему и номенклатуре по цехам и обеспечение их выполнения. <br>
                                1.6. Разработка графиков выпуска продукции и выдача их цехам...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure5') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>Центральная испытательная лаборатория</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>По профилю деятельности предприятие является уникальным и</span><br>
                                единственным предприятием в Центральной Азии. Здесь сохранились стены и <br>
                                здания, характеризующие историю становления и развития ремонтной базы <br>
                                железнодорожной отрасли республики.
                            </p>
                            <p>
                                <span>В разные годы функционирования на предприятии осуществлялся</span><br>
                                ремонт различных видов подвижных составов – паровозы, тепловозы, <br>
                                пассажирские и специальные вагоны, производилось до 300 наименований <br>
                                запасных частей.
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure6') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/structure/CIL1.JPG') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/structure/OTK1.JPG') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>Отдел технического контроля</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>Унитарное Предприятие "O’ztemiry’olmashta’mir" является единственным</span><br>
                                промышленным предприятием в Центральной Азии по ремонту тягового <br>
                                железнодорожного подвижного состава и производству к нему<br>
                                запасных частей. Еще в 2006 году мы заявили о...
                            </p>
                            <p>
                                <span>В 2007 году наше предприятие УП "O’ztemiry’olmashta’mir"</span> <br>
                                сертифицировано по Международному стандарту ISO 9001:2000. <br>
                                В 2013 году УП "O’ztemiry’olmashta’mir"...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure7') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>Отдел кадров</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>1.1. Комплектует предприятие кадрами требуемой квалификации</span><br>
                                и специальности. 1.2. Разрабатывает годовой план омплектования предприятия<br>
                                кадрами с учетом перспектив его развития. 1.3. Обеспечивает <br>
                                прием, размещение и расстановку молодых специалистов.
                            </p>
                            <p>
                                <span>6. Своевременно оформляет приказы по приему, перемещению,</span><br>
                                прекращению трудового договора работников предприятия. <br>
                                1.7. Своевременно оформляет приказы на трудовой отпуск работников <br>
                                предприятия согласно графика...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure8') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/structure/OK1.JPG') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/structure/BUG1.JPG') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>Бухгалтерия</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>2.1. Обеспечение пользователей полной, достоверной,</span><br>
                                своевременной финансовой и бухгалтерской информацией. <br>
                                2.2. Формирование на счетах бухгалтерского учета <br>
                                полных и достоверных данных о состоянии и движении.
                            </p>
                            <p>
                                <span>Активов, состоянии имущественных прав и обязательств.</span> <br>
                                2.3. Обобщение данных бухгалтерского учета в целях эффективного <br>
                                управления. 2.4. Составление финансовой, налоговой и иной отчетности.
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure9') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>Планово-экономический отдел</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>В нашем заводе есть один отдел, который занимается оценкой будущего</span><br>
                                прогнозирования и эффективной организацией работы. <br>
                                Это планово-экономический отдел. В этом отделе осуществляется <br>
                                экономический анализ хозяйственной...
                            </p>
                            <p>
                                <span>Составляет выписки об изменении цен или данные</span><br>
                                о ценах для цехов и отделов предприятии на запасные<br>
                                части и узлы. Этот отдел работает не только с предприятиями<br>
                                на территории Узбекистана...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure10') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                    <div class="gallery-right">
                        <img src="{{ asset('/images/frontend_images/structure/PEO1.JPG') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="second" class="row">
                <div id="second1" class="col-md-6">
                    <div class="gallery-left2">
                        <img src="{{ asset('/images/frontend_images/structure/OOTT1.JPG') }}" alt="">
                    </div>
                </div>
                <div id="second2" class="col-md-6">
                    <div class="gallery-right2">
                        <div class="gallery-right2_date">
                            <h1>Отдел охраны труда и техники безопасности</h1>
                        </div>
                        <div class="gallery-right2_disc">
                            <p>
                                <span>Организация и обеспечение контроля за проведением мероприятий,</span><br>
                                направленных на создание безопасных и здоровых условий<br>
                                и руководителей производственных подразделений проектов плана<br>
                                ассигнований на номенклатурные
                            </p>
                            <p>
                                <span>Контроль за соблюдением руководителями отделов, цехов,</span><br>
                                служб и других производственных участков действующего законодательства <br>
                                по охране труда, постановлений, распоряжений и предписаний <br>
                                вышестоящих организаций...
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{ route('structure11') }}">@lang('about.detail')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ooos">
            <div class="ooos-title">
                <h2>Отдел охраны окружaющей среды</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="links" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="item-img">
                                <img src="{{ asset('/images/frontend_images/structure/PEO1.JPG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="links2" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="item-img">
                                <img src="{{ asset('/images/frontend_images/structure/CIL1.JPG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="history-end_btn">
            <img src="{{ asset('/images/frontend_images/structure/end-img.png') }}" alt="">
        </div>
    </div>
</section>
@include('frontend.frontLayout.front_footer')






<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="{{ asset('js/frontend_js/structure/jq.js') }}">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{ asset('js/frontend_js/structure/owl.carousel.js') }}"></script>
<script src="{{ asset('js/frontend_js/structure/script.js') }}"></script>
</body>
</html>