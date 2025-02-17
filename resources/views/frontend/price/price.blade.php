<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@lang('price.title')</title>


<link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
<link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
  <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('price/plugins/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('price/plugins/owlcarousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('price/fonts.css')}}">
<link rel="stylesheet" href="{{asset('price/style.css')}}">
</head>
<style>
  .price{
    margin:40px 0;
  }
</style>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="price">
  <div class="container">
    <div class="page-title">

        <h2>@lang('price.title')</h2>

      <hr>
      <hr class="blue" style="background-color: #2696f8;">
    </div>
  </div>
  <div class="container">
    <div class="price-list">
      <span>
        @lang('price.content1')<br>
      </span>
    </div>
    <center>
      <style>
        table{
          width:100%;
        }
        td, th{
          border:1px solid #96999a;
          text-align: left;
        }
        th {
          padding-left: 5px;
        }
        th {
          border: none;
          border-bottom: 2px solid #2696f8;
        }
        td {
          padding:8px 15px;
          border:1px solid silver;
        }
        td:nth-child(1){
          width:50%;
        }
        td:nth-child(2){
          width:10%;
        }
        td:nth-child(3){
          width:40%;
        }
        tbody tr:nth-child(1) td{
          border-top:none;
        }
        .buttons a{
          padding:5px;
        }
        th:last-child{
          text-align: center;
        }
      </style>


      <table class="top">
        <thead>
          <th width="50%">Вид локомативов</th>
          <th width="10%">Вид ремонта</th>
          <th width="40%">Цена в дол. США</th>
        </thead>
      </table>
      <table>

        <tbody>
          <tr>
            <td colspan="100%">Т Е П Л О В О З Ы:</td>
          </tr>
          <tr>
            <td>Тепловоз ТЭ10</td>
            <td>KP-1</td>
            <td>106 733</td>
          </tr>
          <tr>
            <td>Тепловоз ТЭП70БС</td>
            <td>TP-3</td>
            <td>97 827</td>
          </tr>
          <tr>
            <td>Тепловоз ТЭП70БС</td>
            <td>KP-1</td>
            <td>187 160</td>
          </tr>
          <tr>
            <td>Тепловоз ТЭМ2</td>
            <td>TP-3</td>
            <td>61 698</td>
          </tr>
          <tr>
            <td>Тепловоз ТЭМ2</td>
            <td>KP-1</td>
            <td>80 589</td>
          </tr>
          <tr>
            <td>Тепловоз ТЭМ2</td>
            <td>KP-2</td>
            <td>92 023</td>
          </tr>
          <tr>
            <td>Тепловоз ТЭМ2</td>
            <td>KPП</td>
            <td>167 756</td>
          </tr>
          <tr>
            <td>Тепловоз ТЭ10М</td>
            <td>KP-2</td>
            <td>164 514</td>
          </tr>
          <tr>
            <td>Тепловоз ЧМЭ3</td>
            <td>KP-1</td>
            <td>27 908</td>
          </tr>
          <tr>
            <td>Тепловоз ЧМЭ3</td>
            <td>KPП</td>
            <td>27 908</td>
          </tr>
          <tr>
            <td colspan="100%">Э Л Е К Т Р О В О З Ы:</td>
          </tr>

          <tr>
            <td>Электровоз ВЛ-80С</td>
            <td>KP-1</td>
            <td>117 933</td>
          </tr>
          <tr>
            <td>Электровоз ВЛ-80С</td>
            <td>КBP</td>
            <td>171 443</td>
          </tr>
          <tr>
            <td>Электровоз ВЛ-60К</td>
            <td>KBP</td>
            <td>153 971</td>
          </tr>
        </tbody>
      </table>
    </center>
    <div class="price-list">

        <span>
             @lang('price.content2')
      </span>

    </div>
    <center>
      <table class="top">
        <thead>
          <th  width="50%">Вид ремонта</th>
          <th  width="10%">Ед. изм.</th>
          <th  width="40%">Цена в дол. США</th>
        </thead>
      </table>
      <table>
        <tbody>
          <tr>
            <td id="tdthird" colspan="100%">на ремонт тепловозных колесных пар:</td>
          </tr>
          <tr>
            <td>Со сменой двух бандажей и установкой новых подшипников:</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>ТЭ108</td>
            <td>к/п</td>
            <td>5 501</td>
          </tr>
          <tr>
            <td>ТЭМ2</td>
            <td>к/п</td>
            <td>4 314</td>
          </tr>
          <tr>
            <td>Со сменой двух бандажей и ремонтными подшипниками</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>ТЭ10М</td>
            <td>к/п</td>
            <td>2 214</td>
          </tr>
          <tr>
            <td>ТЭМ2</td>
            <td>к/п</td>
            <td>2 261</td>
          </tr>

          <tr>
            <td>Электропоездные колесные пары (ЭР9Е)</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Со сменой двух бандажей и установкой новых подшипников:</td>
            <td>к/п</td>
            <td>3 226</td>
          </tr>
          <tr>
            <td>Со сменой двух бандажей и ремонтными подшипниками:</td>
            <td>к/п</td>
            <td>3 062</td>
          </tr>
          <tr>
            <td>Электровозные колесные пары (ВЛ-80, ВЛ-60)</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Со сменой двух бандажей и установкой новых подшипников:</td>
            <td>к/п</td>
            <td>6 343</td>
          </tr>
          <tr>
            <td>Со сменой двух бандажей и ремонтными подшипниками:</td>
            <td>к/п</td>
            <td>3 587</td>
          </tr>
        </tbody>
      </table>
    </center>
    <div class="buttons">
      <a id="btn-1" href="{{ url('/download/price-list') }}"> <i class="fa fa-download" aria-hidden="true"></i> @lang('price.download')</a>
    </div>
  </div>
</section>


@include('frontend.frontLayout.front_footer')




<script src="{{asset('price/plugins/jq.js')}}"></script>

<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/slick/slick.js')}}"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{asset('price/plugins/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('price/script.js')}}"></script>

<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>