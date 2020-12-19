@extends('layouts.factoriesLayout.factory_design')
@section('factory')

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1440px;
        }

        /*

        LMZ

        */


        section.lmz {
            margin-top: 50px;
        }

        .lmz-title {
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            border-bottom: 1px solid #bcbcbc;
            position: relative;
        }

        .lmz-title::after {
            content: "";
            position: absolute;
            z-index: 1;
            width: 350px;
            height: 5px;
            background-color: #2696f8;
            border-radius: 4px;
            bottom: -6%;
            left: 38%;
        }

        .lmz-title h2 {
            text-transform: uppercase;
            font-size: 34px;
            font-weight: bold;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";;
        }

        .lmz-name {
            padding: 30px 0;
        }

        .lmz-name h3 {
            text-transform: uppercase;
            color: #0385f7;
            font-size: 24px;
        }

        .item {
            border: 3px solid #008aff;
            border-radius: 15px;
            height: 100%;
        }

        .item-img {
            width: 100%;
            min-height: 277px;
        }

        .item-img img {
            border-radius: 12px;
        }

        .owl-carousel .owl-item img {
            min-height: 277px;
        }

        .lmz-btn {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .lmz-btn a {
            color: #fff;
            background-color: #17a6b7;
            border-radius: 20px;
            padding: 3px 40px;
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lmz-btn a:hover {
            background-color: #fff;
            color: #17a6b7;
            border: 1px solid #17a6b7;
        }

        .lmz-text_name {
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        .lmz-text_name h3 {
            color: #2696f8;
            font-family: "Segoe UI Italic";
            text-transform: uppercase;
            font-weight: bold;
        }

        .lmz-img {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }

        .lmz-text_disc span{
            font-weight: 600;
            line-height: 33px;
            font-size: 18px;
        }

        .lmz-text_end {
            list-style: none;
            font-weight: 600;
            margin: 20px 0;
        }

        .lmz-text_end li {
            line-height: 30px;
            font-size: 18px;
        }


        /*

        MEDIA

        */

        @media(max-width: 1280px) {
            .lmz-title::after {
                left: 36%;
            }
        }

        @media(max-width: 1024px) {
            .lmz-title::after {
                left: 36%;
            }
            .lmz-title h2 {
                font-size: 30px;
            }
            .lmz-title::after {
                left: 31%;
            }
        }

        @media(max-width: 768px) {
            .lmz-title::after {
                left: 25%;
            }
        }

        @media(max-width: 544px) {
            .lmz-title h2 {
                font-size: 22px;
            }
            .lmz-title::after {
                width: 220px;
                left: 27%;
                bottom: -10%;
            }
            .lmz-name {
                display: flex;
                justify-content: center;
                padding: 20px 0 5px 0;
            }
            .lmz-name h3 {
                font-size: 20px;
            }
            .lmz-text_name h3 {
                font-size: 20px;
            }
        }

        @media(max-width: 468px) {
            .lmz-title h2 {
                font-size: 21px;
            }
            .lmz-title::after {
                left: 24%;
            }
            .lmz-name h3 {
                font-size: 18px;
            }
            .lmz-text_name h3 {
                font-size: 18px;
            }
            .lmz-img img {
                width: 100%;
            }
        }

        @media (max-width: 414px) {
            .lmz-title h2 {
                font-size: 19px;
            }
            .lmz-title::after {
                left: 22%;
            }
            .lmz-text_name {
                text-align: center;
            }
        }


        @media(max-width: 360px) {
            .lmz-title h2 {
                font-size: 17px;
            }
            .lmz-name h3 {
                font-size: 17px;
            }
            .lmz-title::after {
                width: 170px;
                left: 25%;
            }
            .lmz-text_name {
                text-align: center;
            }
            .lmz-text_name {
                margin-top: 40px;
            }
            .lmz-text_disc span {
                line-height: 30px;
            }
        }

        @media (max-width: 360px) {
            .lmz-title h2 {
                font-size: 19px;
            }
            .lmz-title::after {
                width: 150px;
                left: 24%;
                bottom: -5%;
            }
        }
    </style>
    <section class="lmz">
        <div class="container">
            <div class="lmz-title">
                <h2>цеха</h2>
            </div>
            <div class="lmz-name">
                <h3>локомотивно-сборочный цех</h3>
            </div>
            <div id="links" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/manufacture/factory1/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/manufacture/factory1/2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/manufacture/factory1/3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="lmz-btn">
                <a href="#">вся галерея</a>
            </div>
            <div class="lmz-text_name">
                <h3>назначение в локомотивосборочном цехе</h3>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/manufacture/factory9/end-img.png') }}" alt="">
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
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/manufacture/factory9/end-img.png') }}" alt="">
            </div>
        </div>
    </section>


@endsection