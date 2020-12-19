<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Отправить сообщение</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/send_message/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/send_message/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
</head>
<body onclick="hide_menu()">

@include('frontend.frontLayout.front_header')
    <section class="message">
        <div class="message-main">
            <div class="container">
                <div class="message-main_title">
                        <h3>Отправить сообщение</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="message-main_left">
                            @if(count($errors) > 0)

                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismis = "alert">x</button>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                </div>

                            @endif
                                <form action="{{ url('/send-message/send') }}" method="post">{{ csrf_field() }}
                                    <input id="small" type="text" role="checkbox" placeholder="Имя, Фамилия" name="name">
                                    <input id="small" type="text" role="checkbox" placeholder="Телефон" name="phone">
                                    <input id="small" type="text" role="checkbox" placeholder="Тема Обращение (Вопрос)" name="theme">
                                    <input id="small" type="text" role="checkbox" placeholder="E-mail" name="email">
                                    <textarea name="message" id="big" cols="30" rows="10" placeholder="Сообщение..."></textarea>

                                    <div class="message-main_left__btn">
                                        <a href=""><input type="submit" value="Отправить" style="background: transparent; border: none;" ></a>
                                    </div>

                                </form>




             {{--                   <div class="message-main_left__btn">
                                    <a href="{{ url('/send-message/send') }}">Отправить</a>
                                </div>--}}

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="message-right">
                            <div class="message-right_img">
                                <img src="{{ asset('images/frontend_images/send_message/logo.png') }}" alt="">
                            </div>
                            <div class="message-right_name">
                                    <span>"o'ztemiryo'lmashta'mir" unitar korxonasi</span>  
                            </div>
                     @if($message = Session::get('success'))
                                <div class="message-right_end">
                                    <span>{{ $message }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="end-img">
                    <img src="{{ asset('images/frontend_images/send_message/end-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@include('frontend.frontLayout.front_footer')


<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>
