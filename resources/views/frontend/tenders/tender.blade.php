<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/tender/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/tender/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/tender/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/tender/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">


</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="tender">
    <div class="container">
        <div class="tender-title">
            <h2>Тендеры</h2>
        </div>
        <div class="tender-main">
            <div class="flex tender-name" onclick="toggle_desc(this)">
                <div class="trigger">
                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>
                <h3>07.08.2019 ЛОТ №3 НА ЗАКУПКА НА ТЯГОВОГО ТРАНСФОРМАТОРА НА БАЗЕ  ОДЦЭ 2000/25 П-У1 ДЛЯ ПРИМЕНЕНИЯ НА ЛОКОМОТИВАХ И БЛОКА ДРОССЕЛЕЙ</h3>
            </div>
            <div class="tender-description open-desc">
                <hr class="blue">
                <p>Объявление конкурсного отбора наилучших предложений на закупку нижеследующих:</p>
                <table>
                    <thead>
                    <tr>
                        <th width="70%">Позиции</th>
                        <th width="30%">Количества</th>
                    </tr>
                    </thead>
                </table>
                <table>
                    <tbody>
                    <tr id="trfirst">
                        <td width="70%">Тяговый трансформатор</td>
                        <td width="30%">1 шт.</td>
                    </tr>
                    <tr>
                        <td width="70%">Блок дросселей</td>
                        <td width="30%">1 шт.</td>
                    </tr>
                    </tbody>
                </table>
                <h4>Описание лота</h4>
                <hr class="bl">
                <div class="row description">
                    <div class="col-md-6">
                                <span class="desc-desc">
                                    Конверты с документами для квалификационного отбора и коммерческими предложениями в запечатанном виде должны быть доставлены посредством почтовой службы либо нарочно, уполномоченным доверенностью представителем претендента на участие в конкурсе по адресу: Республика Узбекистан, 100005, г.Ташкент, ул. Мехржон, 64.
                                </span>
                    </div>
                    <div class="col-md-6">
                        <div class="two-way">
                            <div>Контакты:</div>
                            <div>+998(71) 237-88-85; +998(97) 444-99-29;</div>
                        </div>
                        <div class="two-way">
                            <div>Окончание приёма заявок:</div>
                            <div>13.08.2019 г. до 17:00</div>
                        </div>
                        <div class="two-way">
                            <div>Ссылки на скачивание:</div>
                            <div class="tenders-link">
                                <a href="#">Тендерная документация</a> <br>
                                <a href="#">Тех. задание на трансформатора</a> <br>
                                <a href="#">Техническое задание на Дроссель</a> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;">
            <style>
                @import url("chrome-extension://pgjndpcilbcanlnhhjmhjalilcmoicjc/content/styles.css");
            </style>
            <div class="caa">
                <!---->
                <!---->
                <!---->
            </div>
        </div>
    </div>
</section>

<section class="tender">
    <div class="container">
        <div class="tender-main">
            <div class="flex tender-name" onclick="toggle_desc(this)">
                <div class="trigger">
                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>
                <h3>08.08.2019 ЛОТ №4 НА ЗАКУПКА МАКЕТОВ ЛОКОМОТИВОВ ДЛЯ РЕКЛАМНЫХ ЦЕЛЯХ</h3>
            </div>
            <div class="tender-description open-desc">
                <hr class="blue">
                <p>Объявление конкурсного отбора наилучших предложений на закупку нижеследующих макетов локомотивов:</p>
                <table>
                    <thead>
                    <tr>
                        <th width="10%">№</th>
                        <th width="60%">Наименование</th>
                        <th width="10%">ед.изм</th>
                        <th width="20%">кол-во</th>
                    </tr>
                    </thead>
                </table>
                <table>
                    <tbody>
                    <tr id="trfirst">
                        <td width="10%">1</td>
                        <td width="60%">Тепловоз UzTE16M</td>
                        <td width="10%">шт</td>
                        <td width="20%">1</td>
                    </tr>
                    <tr>
                        <td width="10%">2</td>
                        <td width="60%">Тепловоз ТЭ10М</td>
                        <td width="10%">шт</td>
                        <td width="20%">1</td>
                    </tr>
                    <tr>
                        <td width="10%">3</td>
                        <td width="60%">Тепловоз ТЭМ2</td>
                        <td width="10%">шт</td>
                        <td width="20%">1</td>
                    </tr>
                    <tr>
                        <td width="10%">4</td>
                        <td width="60%">Тепловоз ЧМЭ3</td>
                        <td width="10%">шт</td>
                        <td width="20%">1</td>
                    </tr>
                    <tr>
                        <td width="10%">5</td>
                        <td width="60%">Тепловоз ТЭП70БС</td>
                        <td width="10%">шт</td>
                        <td width="20%">1</td>
                    </tr>
                    <tr>
                        <td width="10%">6</td>
                        <td width="60%">Тепловоз ТЭ116М</td>
                        <td width="10%">шт</td>
                        <td width="20%">1</td>
                    </tr>
                    <tr>
                        <td width="10%">7</td>
                        <td width="60%">Электровоз ВЛ60</td>
                        <td width="10%">шт</td>
                        <td width="20%">1</td>
                    </tr>
                    <tr>
                        <td width="10%">8</td>
                        <td width="60%">Электровоз ВЛ80н</td>
                        <td width="10%">шт</td>
                        <td width="20%">1</td>
                    </tr>
                    <tr>
                        <td width="10%">9</td>
                        <td width="60%">Электровоз Узбекистан</td>
                        <td width="10%">шт</td>
                        <td width="20%">1</td>
                    </tr>
                    </tbody>
                </table>
                <h4>Описание лота</h4>
                <hr class="bl">
                <div class="row description">
                    <div class="col-md-6">
                                <span class="desc-desc">
                                    Конверты с документами для квалификационного отбора и коммерческими предложениями в запечатанном виде должны быть доставлены посредством почтовой службы либо нарочно, уполномоченным доверенностью представителем претендента на участие в конкурсе по адресу: Республика Узбекистан, 100005, г.Ташкент, ул. Мехржон, 64.
                                </span>
                    </div>
                    <div class="col-md-6">
                        <div class="two-way">
                            <div>Контакты:</div>
                            <div>+998(71) 237-88-85; +998(97) 149-07-59</div>
                        </div>
                        <div class="two-way">
                            <div>Окончание приёма заявок:</div>
                            <div>13.08.2019 г. до 17:00</div>
                        </div>
                        <div class="two-way">
                            <div>Ссылки на скачивание:</div>
                            <div class="tenders-link">
                                <a href="#">Тендерная документация</a> <br>
                                <a href="#">ТЭ10М</a>
                                <a href="#">ТЭМ2</a>
                                <a href="#">UzTE16M</a>
                                <a href="#">ЧМЭ3</a>
                                <a href="#">ТЭП70</a>
                                <a href="#">ВЛ80</a>
                                <a href="#">ВЛ60</a>
                                <a href="#">Серия Узбекистан</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;">
            <style>
                @import url("chrome-extension://pgjndpcilbcanlnhhjmhjalilcmoicjc/content/styles.css");
            </style>
            <div class="caa">
                <!---->
                <!---->
                <!---->
            </div>
        </div>
    </div>
</section>

<section class="tender">
    <div class="container">
        <div class="tender-main">
            <div class="flex tender-name" onclick="toggle_desc(this)">
                <div class="trigger">
                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>
                <h3>17.02.2020Г. ЛОТ №02-1 НА ЗАКУПКУ ИЗОЛЯЦИОННЫХ МАТЕРИАЛОВ ДЛЯ РЕМОНТА ЛОКОМОТИВОВ</h3>
            </div>
            <div class="tender-description open-desc">
                <hr class="blue">
                <p>Объявление конкурсного отбора наилучших предложений на закупку нижеследующих изоляционных материалов:</p>
                <table>
                    <thead>
                    <tr>
                        <th width="10%">№</th>
                        <th width="60%">Наименование</th>
                        <th width="10%">ед.изм</th>
                        <th width="20%">кол-во</th>
                    </tr>
                    </thead>
                </table>
                <table>
                    <tbody>
                    <tr id="trfirst">
                        <td width="10%">1</td>
                        <td width="60%">Клапан выхлопной Д50.09.010M</td>
                        <td width="10%">шт</td>
                        <td width="20%">36</td>
                    </tr>
                    <tr>
                        <td width="10%">2</td>
                        <td width="60%">Насос водяной Д50.11сб</td>
                        <td width="10%">шт</td>
                        <td width="20%">2</td>
                    </tr>
                    <tr>
                        <td width="10%">3</td>
                        <td width="60%">Насос масляный 2Д50.12сб-3</td>
                        <td width="10%">шт</td>
                        <td width="20%">2</td>
                    </tr>
                    <tr>
                        <td width="10%">4</td>
                        <td width="60%">Форсунка Д50-17сб</td>
                        <td width="10%">шт</td>
                        <td width="20%">18</td>
                    </tr>
                    <tr>
                        <td width="10%">5</td>
                        <td width="60%">Толкатель <br> Д50.27.113.сб</td>
                        <td width="10%">шт</td>
                        <td width="20%">18</td>
                    </tr>
                    <tr>
                        <td width="10%">6</td>
                        <td width="60%">Кольцо <br> уплотнительное Д50.18.011</td>
                        <td width="10%">шт</td>
                        <td width="20%">48</td>
                    </tr>
                    <tr>
                        <td width="10%">7</td>
                        <td width="60%">твдД50.23.115-1</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">8</td>
                        <td width="60%">твд Д50.23.116-2</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">9</td>
                        <td width="60%">твдД50.23.117-3</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">10</td>
                        <td width="60%">твд Д50.23.118-4</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">11</td>
                        <td width="60%">твдД50.23.119-5</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">12</td>
                        <td width="60%">твд Д50.23.120-5</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">13</td>
                        <td width="60%">Привод масляного насоса Д50.34.1сбА</td>
                        <td width="10%">шт</td>
                        <td width="20%">2</td>
                    </tr>
                    <tr>
                        <td width="10%">14</td>
                        <td width="60%">РЧО Д50.27.200сб</td>
                        <td width="10%">шт</td>
                        <td width="20%">2</td>
                    </tr>
                    </tbody>
                </table>
                <h4>Описание лота</h4>
                <hr class="bl">
                <div class="row description">
                    <div class="col-md-6">
                                <span class="desc-desc">
                                    Конверты с документами для квалификационного отбора и коммерческими предложениями в запечатанном виде должны быть доставлены посредством почтовой службы либо нарочно, уполномоченным доверенностью представителем претендента на участие в конкурсе по адресу: Республика Узбекистан, 100005, г.Ташкент, ул. Мехржон, 64.
                                </span>
                    </div>
                    <div class="col-md-6">
                        <div class="two-way">
                            <div>Контакты:</div>
                            <div>+998(71) 237-88-85; +998(97) 149-07-59</div>
                        </div>
                        <div class="two-way">
                            <div>Окончание приёма заявок:</div>
                            <div>13.08.2019 г. до 17:00</div>
                        </div>
                        <div class="two-way">
                            <div>Ссылки на скачивание:</div>
                            <div class="tenders-link">
                                <a href="#">Тендерная документация</a> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;">
            <style>
                @import url("chrome-extension://pgjndpcilbcanlnhhjmhjalilcmoicjc/content/styles.css");
            </style>
            <div class="caa">
                <!---->
                <!---->
                <!---->
            </div>
        </div>
    </div>
</section>

<section class="tender">
    <div class="container">
        <div class="tender-main">
            <div class="flex tender-name" onclick="toggle_desc(this)">
                <div class="trigger">
                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>
                <h3>06.03.2020 ЛОТ №03-1 НА ЗАКУПКУ ЭЛЕКТРОИЗОЛЯЦИОННЫХ МАТЕРИАЛОВ В РАМКАХ ВЫПОЛНЕНИЯ УТВЕРЖДЕННОГО ГРАФИКА РЕМОНТА ЛОКОМОТИВОВ НА 2020 ГОД</h3>
            </div>
            <div class="tender-description open-desc">
                <hr class="blue">
                <p>Объявление конкурсного отбора наилучших предложений на закупку электроизоляционных материалов  в рамках выполнения утвержденного графика ремонта локомотивов на 2020 год:</p>
                <table>
                    <thead>
                    <tr>
                        <th width="10%">№</th>
                        <th width="40%">Наименование материала</th>
                        <th width="20%">ГОСТ, ТУ</th>
                        <th width="10%">Ед. изм</th>
                        <th width="20%">кол-во</th>
                    </tr>
                    </thead>
                </table>
                <table>
                    <tbody>
                    <tr id="trfirst">
                        <td width="10%">1</td>
                        <td width="40%">Компаунд КП-303Н Б</td>
                        <td width="20%">ТУ20.16.40- 019-31885305-2017</td>
                        <td width="10%">кг</td>
                        <td width="20%">10 000</td>
                    </tr>
                    <tr>
                        <td width="10%">2</td>
                        <td width="40%">Активный разбавитель АР-303</td>
                        <td width="20%">ТУ 20.16.40- 074-31885305- 2019</td>
                        <td width="10%">кг</td>
                        <td width="20%">400</td>
                    </tr>
                    <tr>
                        <td width="10%">3</td>
                        <td width="40%">Полиимидная лента с липким слоем ПМ(л) Н/С 0,045x20</td>
                        <td width="20%">ТУ3491-048- 31885305- 2007</td>
                        <td width="10%">кг</td>
                        <td width="20%">500</td>
                    </tr>
                    <tr>
                        <td width="10%">4</td>
                        <td width="40%">Лента слюдяная пропитанная ЛСп-Н- ТПл 0,08x20</td>
                        <td width="20%">ТУ27.90.12-017-31885305-2017</td>
                        <td width="10%">кг</td>
                        <td width="20%">2000</td>
                    </tr>
                    <tr>
                        <td width="10%">5</td>
                        <td width="40%">Лента слюдяная пропитанная ЛСп-Н- ТПл 0,10x20</td>
                        <td width="20%">ТУ27.90.12-017-31885305-2017</td>
                        <td width="10%">кг</td>
                        <td width="20%">2500</td>
                    </tr>
                    <tr>
                        <td width="10%">6</td>
                        <td width="40%">Лента слюдяная пропитанная ЛСп-Н- ТПл 0,13x30</td>
                        <td width="20%">ТУ27.90.12- 017-31885305- 2017</td>
                        <td width="10%">кг</td>
                        <td width="20%">2000</td>
                    </tr>
                    <tr>
                        <td width="10%">7</td>
                        <td width="40%">Лента слюдяная пропитанная ЛСп-С- ТПл 0,08x20</td>
                        <td width="20%">ТУ27.90.12- 017-31885305- 2017</td>
                        <td width="10%">кг</td>
                        <td width="20%">500</td>
                    </tr>
                    <tr>
                        <td width="10%">8</td>
                        <td width="40%">Лента слюдяная пропитанная ЛСп-С- ТПл 0,10x20</td>
                        <td width="20%">ТУ27.90Л2-017-31885305-2017</td>
                        <td width="10%">кг</td>
                        <td width="20%">500</td>
                    </tr>
                    <tr>
                        <td width="10%">9</td>
                        <td width="40%">Флексимид 2942т. 0,17 мм</td>
                        <td width="20%">ТУ27.90Л2-128-31885305-2017</td>
                        <td width="10%">кг</td>
                        <td width="20%">600</td>
                    </tr>
                    <tr>
                        <td width="10%">10</td>
                        <td width="40%">Пленко слюдинит ГСП- Н-ТПл 0,4(0,45)</td>
                        <td width="20%">ТУ3492-005-31885305-2003</td>
                        <td width="10%">кг</td>
                        <td width="20%">600</td>
                    </tr>
                    <tr>
                        <td width="10%">11</td>
                        <td width="40%">Пленкослюдинит ГСП- Н-ТПл 0,3(0,35)</td>
                        <td width="20%">ТУ3492-005-31885305-2003</td>
                        <td width="10%">кг</td>
                        <td width="20%">400</td>
                    </tr>
                    <tr>
                        <td width="10%">12</td>
                        <td width="40%">Лента стеклянная бандажная пропитанная ЛСБЭ-180-М 0,2x20</td>
                        <td width="20%">ТУ 27.90.12-071-31885305-2017</td>
                        <td width="10%">кг</td>
                        <td width="20%">2000</td>
                    </tr>
                    <tr>
                        <td width="10%">13</td>
                        <td width="40%">Мастика электроизоляционная МКП-303</td>
                        <td width="20%">ТУ20.30.22-024-31885305-2018</td>
                        <td width="10%">кг</td>
                        <td width="20%">700</td>
                    </tr>
                    <tr>
                        <td width="10%">14</td>
                        <td width="40%">Стеклолакоткань ЛСММ- 105/120 0,15</td>
                        <td width="20%">ТУ 16- 90И37.0003.0 03ТУ</td>
                        <td width="10%">м.кв</td>
                        <td width="20%">600</td>
                    </tr>
                    <tr>
                        <td width="10%">15</td>
                        <td width="40%">Эмаль Политерм 943</td>
                        <td width="20%">ТУ20.30.12-068-31885305-2017</td>
                        <td width="10%">кг</td>
                        <td width="20%">1000</td>
                    </tr>
                    <tr>
                        <td width="10%">16</td>
                        <td width="40%">Лента ЛЭСБ 0,1x20</td>
                        <td width="20%">ГОСТ 5937-81</td>
                        <td width="10%">м</td>
                        <td width="20%">30000</td>
                    </tr>
                    <tr>
                        <td width="10%">17</td>
                        <td width="40%">Лента ЛЭСБ 0,2x30</td>
                        <td width="20%">ГОСТ 5937-81</td>
                        <td width="10%">м</td>
                        <td width="20%">30000</td>
                    </tr>
                    <tr>
                        <td width="10%">18</td>
                        <td width="40%">Стеклолакоткань СЛВ 0,17</td>
                        <td width="20%">ТУ 27.33.14- 134-31885305- 2019</td>
                        <td width="10%">кг</td>
                        <td width="20%">300</td>
                    </tr>
                    <tr>
                        <td width="10%">19</td>
                        <td width="40%">Стеклотекстолит СТЭФ-1 5 мм</td>
                        <td width="20%">ГОСТ 12652- 74</td>
                        <td width="10%">кг</td>
                        <td width="20%">2000</td>
                    </tr>
                    <tr>
                        <td width="10%">20</td>
                        <td width="40%">Стеклотекстолит СТЭФ-1 1 мм</td>
                        <td width="20%">ГОСТ 12652- 74</td>
                        <td width="10%">кг</td>
                        <td width="20%">400</td>
                    </tr>
                    <tr>
                        <td width="10%">21</td>
                        <td width="40%">Стеклотекстолит СТЭФ-1 0,5 мм</td>
                        <td width="20%">ГОСТ 12652- 74</td>
                        <td width="10%">кг</td>
                        <td width="20%">200</td>
                    </tr>
                    <tr>
                        <td width="10%">22</td>
                        <td width="40%">Кабельная бумага К-120</td>
                        <td width="20%">ГОСТ 23436- 83</td>
                        <td width="10%">кг</td>
                        <td width="20%">300</td>
                    </tr>
                    <tr>
                        <td width="10%">23</td>
                        <td width="40%">Фторопластовая пленка Ф-4ЭО 0,02x30 мм</td>
                        <td width="20%">ГОСТ 24222- 80</td>
                        <td width="10%">кг</td>
                        <td width="20%">500</td>
                    </tr>
                    </tbody>
                </table>
                <h4>Описание лота</h4>
                <hr class="bl">
                <div class="row description">
                    <div class="col-md-6">
                                <span class="desc-desc">
                                    Конверты с документами для квалификационного отбора и коммерческими предложениями в запечатанном виде должны быть доставлены посредством почтовой службы либо нарочно, уполномоченным доверенностью представителем претендента на участие в конкурсе по адресу: Республика Узбекистан, 100005, г.Ташкент, ул. Мехржон, 64.
                                </span>
                    </div>
                    <div class="col-md-6">
                        <div class="two-way">
                            <div>Контакты:</div>
                            <div>+998(71) 237-88-85; +998(97) 735-69-79;</div>
                        </div>
                        <div class="two-way">
                            <div>Окончание приёма заявок:</div>
                            <div>13.08.2019 г. до 17:00</div>
                        </div>
                        <div class="two-way">
                            <div>Ссылки на скачивание:</div>
                            <div class="tenders-link">
                                <a href="#">Тендерная документация</a> <br>
                                <a href="#">Техническое задание</a> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;">
            <style>
                @import url("chrome-extension://pgjndpcilbcanlnhhjmhjalilcmoicjc/content/styles.css");
            </style>
            <div class="caa">
                <!---->
                <!---->
                <!---->
            </div>
        </div>
    </div>
</section>
<section class="tender">
    <div class="container">
        <div class="tender-main">
            <div class="flex tender-name" onclick="toggle_desc(this)">
                <div class="trigger">
                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>
                <h3>06.03.2020 ЛОТ №03-1 НА ЗАКУПКУ ЭЛЕКТРОИЗОЛЯЦИОННЫХ МАТЕРИАЛОВ В РАМКАХ ВЫПОЛНЕНИЯ УТВЕРЖДЕННОГО ГРАФИКА РЕМОНТА ЛОКОМОТИВОВ НА 2020 ГОД</h3>
            </div>
            <div class="tender-description open-desc">
                <hr class="blue">
                <p>Объявление конкурсного отбора наилучших предложений на закупку электроизоляционных материалов  в рамках выполнения утвержденного графика ремонта локомотивов на 2020 год:</p>
                <table>
                    <thead>
                    <tr>
                        <th width="10%">№</th>
                        <th width="60%">Наименование</th>
                        <th width="10%">ед.изм</th>
                        <th width="20%">кол-во</th>
                    </tr>
                    </thead>
                </table>
                <table>
                    <tbody>
                    <tr id="trfirst">
                        <td width="10%">1</td>
                        <td width="60%">Клапан выхлопной Д50.09.010M</td>
                        <td width="10%">шт</td>
                        <td width="20%">36</td>
                    </tr>
                    <tr>
                        <td width="10%">2</td>
                        <td width="60%">Насос водяной Д50.11сб</td>
                        <td width="10%">шт</td>
                        <td width="20%">2</td>
                    </tr>
                    <tr>
                        <td width="10%">3</td>
                        <td width="60%">Насос масляный 2Д50.12сб-3</td>
                        <td width="10%">шт</td>
                        <td width="20%">2</td>
                    </tr>
                    <tr>
                        <td width="10%">4</td>
                        <td width="60%">Форсунка Д50-17сб</td>
                        <td width="10%">шт</td>
                        <td width="20%">18</td>
                    </tr>
                    <tr>
                        <td width="10%">5</td>
                        <td width="60%">Толкатель <br> Д50.27.113.сб</td>
                        <td width="10%">шт</td>
                        <td width="20%">18</td>
                    </tr>
                    <tr>
                        <td width="10%">6</td>
                        <td width="60%">Кольцо <br> уплотнительное Д50.18.011</td>
                        <td width="10%">шт</td>
                        <td width="20%">48</td>
                    </tr>
                    <tr>
                        <td width="10%">7</td>
                        <td width="60%">твдД50.23.115-1</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">8</td>
                        <td width="60%">твд Д50.23.116-2</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">9</td>
                        <td width="60%">твдД50.23.117-3</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">10</td>
                        <td width="60%">твд Д50.23.118-4</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">11</td>
                        <td width="60%">твдД50.23.119-5</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">12</td>
                        <td width="60%">твд Д50.23.120-5</td>
                        <td width="10%">шт</td>
                        <td width="20%">5</td>
                    </tr>
                    <tr>
                        <td width="10%">13</td>
                        <td width="60%">Привод масляного насоса Д50.34.1сбА</td>
                        <td width="10%">шт</td>
                        <td width="20%">2</td>
                    </tr>
                    <tr>
                        <td width="10%">14</td>
                        <td width="60%">РЧО Д50.27.200сб</td>
                        <td width="10%">шт</td>
                        <td width="20%">2</td>
                    </tr>
                    </tbody>
                </table>
                <h4>Описание лота</h4>
                <hr class="bl">
                <div class="row description">
                    <div class="col-md-6">
                                <span class="desc-desc">
                                    Конверты с документами для квалификационного отбора и коммерческими предложениями в запечатанном виде должны быть доставлены посредством почтовой службы либо нарочно, уполномоченным доверенностью представителем претендента на участие в конкурсе по адресу: Республика Узбекистан, 100005, г.Ташкент, ул. Мехржон, 64.
                                </span>
                    </div>
                    <div class="col-md-6">
                        <div class="two-way">
                            <div>Контакты:</div>
                            <div>+998(71) 237-88-85; +998(97) 735-69-79;</div>
                        </div>
                        <div class="two-way">
                            <div>Окончание приёма заявок:</div>
                            <div>13.08.2019 г. до 17:00</div>
                        </div>
                        <div class="two-way">
                            <div>Ссылки на скачивание:</div>
                            <div class="tenders-link">
                                <a href="#">Тендерная документация</a> <br>
                                <a href="#">Техническое задание</a> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;">
            <style>
                @import url("chrome-extension://pgjndpcilbcanlnhhjmhjalilcmoicjc/content/styles.css");
            </style>
            <div class="caa">
                <!---->
                <!---->
                <!---->
            </div>
        </div>
    </div>
</section>
@include('frontend.frontLayout.front_footer')
<script src="{{ asset('js/frontend_js/tender/jq.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{ asset('js/frontend_js/tender/owl.carousel.js') }}"></script>
<script src="{{ asset('js/frontend_js/tender/script.js') }}"></script>

</body>
</html>