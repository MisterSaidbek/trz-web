<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Сертификаты</title>

    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
	<link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/sertifikat/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/sertifikat/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/sertifikat/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/sertifikat/style.css') }}">


</head>
<body onclick="hide_menu()">

@include('frontend.frontLayout.front_header')
    <section class="sert" style="margin-top: 40px;">
        <div class="container">
            <div class="sert-title">
                <h2>Сертификаты</h2>
            </div>
            
		<div class="sert-main">
                	<div class="row">
                    		<div class="col-md-4">
                        		<div class="sert-main_img">
                            		<img src="{{ asset('images/frontend_images/sertifikat/sert.jpg') }}" alt="">
                        		</div>
                    		</div>
                    		<div class="col-md-4">
                        		<div class="sert-main_img">
                            		<img src="{{ asset('images/frontend_images/sertifikat/Ser_1.png') }}" alt="">

                        		</div>
                    		</div>
                    		<div class="col-md-4">
                        		<div class="sert-main_img">
                            		<img src="{{ asset('images/frontend_images/sertifikat/Ser_2.png') }}" alt="">

                        		</div>
                    		</div>
                 	</div>
                	<div class="row">
                    		<div class="col-md-5">
                        		<div class="sert-main_img">
                            		<img src="{{ asset('images/frontend_images/sertifikat/Ser_4.png') }}" alt="">
                        		</div>
                    		</div>
                    		<div class="col-md-5">
                        		<div class="sert-main_img">
                            		<img src="{{ asset('images/frontend_images/sertifikat/Ser_5.png') }}" alt="">

                        		</div>
                    		</div>
                 	</div>

                		<div class="sert-end_img">
                    		<img src="{{ asset('images/frontend_images/sertifikat/end-img.png') }}" alt="">
                		</div>
            	</div>
		
        </div>
	    </section>
        @include('frontend.frontLayout.front_footer')
<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/slick/slick.js')}}"></script>
<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>