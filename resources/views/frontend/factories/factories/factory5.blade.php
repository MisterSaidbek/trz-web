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
                <h3>ремонтно-комплектовочный цех</h3>
            </div>
            <div id="links" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/manufacture/factory5/1.JPG') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/manufacture/factory5/2.JPG') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/manufacture/factory5/3.JPG') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="lmz-text_name">
                <h3>НАЗНАЧЕНИЕ РЕМОНТНО-КОМПЛЕКТОВОЧНЫЙ ЦЕХE</h3>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/manufacture/factory9/end-img.png') }}" alt="">
            </div>
            <div class="lmz-text_disc">
                <span>
                    Ремонтно-комплектовочный  цех является самостоятельным структурным  производственно-хозяйственным подразделением предприятия, возглавляется начальником цеха и подчиняется в своей деятельности начальнику производственно-диспетчерского отдела. Ремонтно-комплектовочный цех состоит из участка металлообработки, служебных и бытовых помещений. Ремонтно- комплектовочный цех предназначен для выполнения следующих работ:
                    В соответствии с этим в число производственного отделения ремонтно-комплектовочного цеха входят следующие участки, в которых находятся 8 участков.
                    - разборка тележек, редукторов, компрессоров
                    - очистка и мойка тележек, деталей и узлов вручную и в моечной машине
                    - очистка и мойка редукторов и их деталей, компрессоров и их деталей
                    - разборка, ремонт, сборка и испытание моторно-осевых блоков
                    - разборка, очистка вагонных тележек
                    - механическая обработка деталей и узлов
                    - заготовительные работы
                    - сборка всех узлов и общая сборка тележек локомотивов  и передач в локомотивосборочный цех, сборка всех узлов и общая сборка тележек,  вагонов и передача в локомотивосборочный цех
                    Производит капитальный ремонт тележек тепловозов, электровозов, вагонов; капитальный ремонт агрегатов и узлов тепловозов и электровозов; наплавку постелей блока с последующей механической обработкой.
                    В цехе имеется парк расточных станков для расточки блоков и картеров дизелей.
                </span>
            </div>
            <ul class="lmz-text_end">
                <li>1. Разборочном участке</li>
                <li>2. Тележечном участке</li>
                <li>3. Дефектоскопном  участке</li>
                <li>4. Сборочном участке</li>
                <li>5. Редукторном участке</li>
                <li>6. Участке для ремонта блоков.</li>
                <li>7. Компрессорном  участке</li>
                <li>8. Токарном участке</li>
            </ul>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/manufacture/factory9/end-img.png') }}" alt="">
            </div>
        </div>
    </section>

@endsection