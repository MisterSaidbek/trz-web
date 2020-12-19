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
                <h3>электромашинный цех</h3>
            </div>
            <div id="links" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/manufacture/factory2/1.JPG') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/manufacture/factory2/2.JPG') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/manufacture/factory2/3.JPG') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="lmz-text_name">
                <h3>назначение в электромашинном цехе</h3>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/manufacture/factory9/end-img.png') }}" alt="">
            </div>
            <div class="lmz-text_disc">
                <span>
                    Электромашинный цех предназначен для капи¬тального ремонта тяговых генераторов, электродвигателей, двухмашинных агрегатов и других вспомогательных электрических машин тепловозов и электровозов.
                    Ремонт электрических машин по степени износа или повреждений деталей и узлов подразделяется на два вида: КР-1 и КР-2 (I и II объе¬мов). При КР-1 ремонтируют электрические машины, которые при  ремонте не требуют смены обмоток. При необходимости смены обмоток якоря электрические машины ремонтируют по тре-бованиям КР-2. В состав электромашинного цеха по потоку ремонта тяговых электродвигателей входят участки: разборочно-дефектировочный, секционный, сушильно-пропиточное отделение (СПО), механический участок со сварочным отделением, сборочные с испытательной станцией.
	                На разборочно-дефектировочном участке производится разборка электрических машин очистка и мойка деталей, их дефектация с последующей передачей на специализированные участки для ремонта и монтажа.
	                Якорный участок предназначен для ремонта якоря и имеет специализированные участки по ремонту коллектора, сердечника якоря, укладке секций обмотки, пайке и бандажировке, механической обработке после пропитки и сушки.
	                На секционном участке производят формовку и изолировку секций (катушек) якорной обмотки, формовка главной, дополнительной, и компенсационных катушек электродвигателей локомотивов. Технология изготовления сек¬ций сложна и требует четкого ее соблюдения, так как от качества изготовления секций и укладки в пазы якоря зависит надежность и долговечность тягового электродвигателя.
	                В сушильно-пропиточном участке выполняют пропитку, сушку якорей и полюсных катушек.
	                Механический участок со сварочным отделением предназначен для наплавки, сварки и механической обработки деталей электри¬ческих машин, в том числе и таких, как остов, вал, шайбы и втулки коллектора, щиты и крышки, и т. п.
	                Сборочный участок имеет специализированные участки по сборке магнитной системы, ремонту остовов, польстеров и щеткодержателей.
                    На якорном участке имеются станки для обработки коллекторных
                    пластин после штамповки, прессы для формовки изделий из мика¬нита, печи для нагрева якорей, коллекторов, стенд с механизированным приводом
                    для укладки секций, установки для осадки секций перед бандажировкой, установки для пайки петушков, станки для наложения бандажа, для продорожки и балансировки.
                    Контрольно испытательная станция (КИС) – после ремонта тяговых электродвигателей и  тяговых генераторов испытывается на контрольно испытательном станции.
                    Выполняет капитальный ремонт всех видов электрических машин тепловозов и электровозов; капитальный ремонт тяговых трансформаторов электровозов.
                    Цех располагает большим парком современного оборудования, позволяющим производить капитальный ремонты генераторов ГП-300	ГП-311Б; электродвигателей ЭД118, ЭД107, НБ-412, НБ-418, НБ-514; малых электрический машин тепловозов, электровозов и пассажирских вагонов; капитальный ремонт трансформаторов электровозов.
                </span>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/manufacture/factory9/end-img.png') }}" alt="">
            </div>
        </div>
    </section>


@endsection