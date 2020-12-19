<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>@lang('home.gallery')</title>
	<link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
	<link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/.fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/style.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

{{--	<link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">--}}
{{--	<link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend_css/about/his_gallery/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend_css/modern/tem_gallery/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend_css/modern/tem_gallery/style.css') }}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />--}}


</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="gallery">
	<div class="container">
		<div class="gallery-title">
			<h2>ТЭМ2</h2>
		</div>
		<div class="gallery-name">
			<h4>Галерея</h4>
		</div>
		<div class="gallery-images">
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(1).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(1).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(2).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(2).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(3).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(3).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(4).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(4).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(5).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(5).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(6).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(6).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(7).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(7).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(8).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(8).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(9).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(9).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(10).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(10).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(11).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(11).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(12).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(12).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(13).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(13).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(14).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(14).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(15).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(15).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(16).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(16).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(17).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(17).jpg') }}" alt="">
			</a>
			<a data-fancybox="gallery" href="{{ asset('images/frontend_images/modern/tem_gallery/3(19).jpg') }}">
				<img src="{{ asset('images/frontend_images/modern/tem_gallery/3(19).jpg') }}" alt="">
			</a>
		</div>
		<div class="end-img">
			<img src="{{ asset('images/frontend_images/modern/gallery/end-img.png') }}" alt="">
		</div>
	</div>
</section>

@include('frontend.frontLayout.front_footer')
{{--<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>--}}
<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


</body>
</html>


