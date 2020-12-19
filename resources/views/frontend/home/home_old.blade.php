<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">

	<link rel="stylesheet" href="{{asset('assets/home/css/style.css')}}?t={{time()}}">
	<link rel="stylesheet" href="{{asset('assets/home/css/fonts.css')}}">

	<link rel="stylesheet" href="{{asset('css/frontend_css/up.css')}}">

	<link rel="stylesheet" href="{{asset('assets/mistake/mistakes.css')}}">



	<link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />



	{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

	<link href="{{ asset('js/frontend_js/special_view/dist/site.min.css') }}" rel="stylesheet">

	{{--<link href="assets/mistakes/mistakes.css" rel="stylesheet" type="text/css" />--}}


	<title>O'ZTEMIRYO'LMASHTA'MIR</title>
</head>

<body onclick="hide_menu()" style="font-family: 'Montserrat'!important;">
{{--<div class="preloader d-flex align-items-center justify-content-center">
	<div class="preloader-circle"></div>
	<div class="preloader-img">
		<img src="{{ asset('assets/home/images/logoz.png') }}" alt="">
	</div>
</div>--}}
@include('frontend.frontLayout.front_header')
<header style="position: relative;" id="header_video" class="header_video">
<!-- <video id="videoHome">
			<source src="{{ asset('/assets/intro.mp4') }}" type="video/Mp4">
		</video> -->
	<div class="just-overlay"></div>
	<div class="over-text">
		<div class="creden">
			<div class="container">
				<div class="row">
					<div class="col-md-6 top-left">
						<div class="phone">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<a href="tel:+998 (71) 237-88-85" style="text-decoration: none; color: #fff;">+998 71 237-88-85</a>
						</div>
					</div>
					<div class="col-md-6 top-right">
						<div class="glasses">
							<i class="fa fa-eye-slash vi-open" href="javascript:(0)" aria-hidden="true" style="cursor: pointer">

							</i>
							{{--<a class="fa fa-eye-slash vi-open" href="javascript:(0)" aria-hidden="true"></a>--}}
						</div>
					{{--	<div class="search">
							<div class="search-box">
								<input type="text" onkeyup="search()">
								<span></span>
							</div>
						</div>--}}
						<div style="display: flex; align-items: center; font-family: 'Montserrat';" class="language" onclick="toggle_lang(this)">
							@lang('home.langu')
							<i class="fa fa-angle-down" aria-hidden="true"></i>
							<ul class="form-inline my-2 my-log-0">

								<li class="nav-item active">
									<a class="nav-link" href="{{ url('locale/oz') }}">Узбек</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ url('locale/uz') }}">O'zbek</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ url('locale/ru') }}">Русский</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="showcase">
			<div class="logo">
				<img src="assets/home/images/logoz.png" alt="">
				<small>@lang('home.content')</small>
				<h1>"O'ZTEMIRYO'LMASHTA'MIR" </h1>
			</div>
			<div class="down">
				<i></i>
			</div>
		</div>
	</div>
</header>
<section class="anns">
	<div class="container">
		<div class="title">
			<div>
				<h2>@lang('home.last_news')</h2>
				<div class="arrows" style="display: none !important;">
					<i class="fa fa-angle-left ann-left"></i>
					<i class="fa fa-angle-right ann-right"></i>
				</div>
			</div>
			<hr>
			<hr class="dark">
		</div>
	</div>
	<div class="container">
		<div class="ann-slider">
			<div class="row">
				<div class="col-md-7">
					<div class="big-ann">
						<div class="overlay"></div>
						<div class="text">
							<abbr title="asb">@lang('home.news_1')
							</abbr>
							<div class="details light">
								<div class="detail">
									<i></i>
									<span>10.09.2020</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="small-ann">
						<img src="assets/home/images/ann-small.png" alt="">
						<div class="details dark">
							<div class="detail">
								<i></i>
								<span>10.09.2020</span>
							</div>
						</div>
						<div class="text">
							<abbr title="Медиа-тур: Много нового, интересного и актуального на новых объектах метрополитена. Развитие, достижения и перспективы в годы ... ">@lang('home.news_2')
							</abbr>
							<div>
								<a href="{{ url('/news') }}" >
									<button class="more-button" style="cursor: pointer">@lang('home.all_news')</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- <div class="row">
					<div class="col-md-7">
						<div class="big-ann">
							<div class="overlay"></div>
							<div class="text">
								<abbr title="asb">@lang('home.news_1')
				</abbr>
                <div class="details light">
                    <div class="detail">
                        <i></i>
                        <span>10.09.2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="small-ann">
            <img src="assets/home/images/ann-small.png" alt="">
            <div class="details dark">
                <div class="detail">
                    <i></i>
                    <span>10.09.2020</span>
                </div>
            </div>
            <div class="text">
                <abbr title="Медиа-тур: Много нового, интересного и актуального на новых объектах метрополитена. Развитие, достижения и перспективы в годы ... ">Медиа-тур: Много нового, интересного и актуального на новых объектах метрополитена. Развитие, достижения и перспективы﻿ в годы ...
                </abbr>
                <div>
                    <a href="{{ url('/news') }}" >
										<button class="more-button" style="cursor: pointer">@lang('home.all_news')</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->

		</div>
	</div>
</section>
<section class="interactive">
	<div class="container">
		<div class="title">
			<div>
				<h2>@lang('home.interactive')</h2>
			</div>
			<hr>
			<hr class="dark">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<a class="inter-card" href="{{ url('/page-pres')}}">
					<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
						<img src="{{asset('images/icon1.png')}}"/>
					</div>
					<div class="inter-text">
						<span>@lang('home.page_pres')</span>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a class="inter-card" href="{{ route('open_source') }}">
					<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
						<img src="{{asset('images/icon2.png')}}"/>
					</div>
					<div class="inter-text">
						<span>@lang('home.open_source')</span>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a class="inter-card" href="{{ url('/sertifikat') }}">
					<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
						<img src="{{asset('images/icon3.png')}}"/>
					</div>
					<div class="inter-text">
						<span>@lang('home.sertificate')</span>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a class="inter-card" href="#partners">
					<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
						<img src="{{asset('images/icon4.png')}}"/>
					</div>
					<div class="inter-text">
						<span>@lang('home.partners')</span>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a class="inter-card" href="{{ url('/send-message') }}">
					<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
						<img src="{{asset('images/icon5.png')}}"/>
					</div>
					<div class="inter-text">
						<span>@lang('home.send_messages')</span>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a class="inter-card" href="{{ route('str') }}">
					<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
						<img src="{{asset('images/icon6.png')}}"/>
					</div>
					<div class="inter-text">
						<span>@lang('home.reception')</span>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a class="inter-card" href="{{route('tender')}}">
					<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
						<img src="{{ asset('/images/icon7.png')}}"/>
					</div>
					<div class="inter-text">
						<span>@lang('home.tenders')</span>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a class="inter-card" href="{{ url('/yubiley') }}">
					<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
						<img src="{{asset('images/icon8.png')}}"/>
					</div>
					<div class="inter-text">
						<span>@lang('home.yubiley') "O'ztemiryo'lmashta'mir"</span>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="title">
			<div>
				<h2>@lang('home.gallery')</h2>
			</div>
			<hr>
			<hr class="dark">
		</div>
	</div>
	<div class="gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-4 left">
					<img src="assets/home/images/gall1.png" alt="">
					<img src="assets/home/images/gall4.png" alt="">
					<img src="assets/home/images/gall6.png" alt="">
				</div>
				<div class="col-md-8 right">
					<div class="row">
						<div class="col-md-6 two" style="padding:0">
							<img src="assets/home/images/gall2.png" alt="">
							<img src="assets/home/images/gall5.png" alt="">
						</div>
						<div class="col-md-6 one">
							<img src="assets/home/images/gall3.png" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 one-big" style="padding:0">
							<img src="assets/home/images/gall7.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






	{{--            <div class="gallery-images">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 left">
                                <a data-fancybox="gallery" href="assets/home/images/gall1.png">
                                    <img src="assets/home/images/gall1.png" alt="">
                                </a>
                                <a data-fancybox="gallery" href="assets/home/images/gall4.png">
                                    <img src="assets/home/images/gall4.png" alt="">
                                </a>
                                <a data-fancybox="gallery" href="assets/home/images/gall6.png">
                                    <img src="assets/home/images/gall6.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-8 right">
                                <div class="row">
                                    <div class="col-md-6 two" style="padding:0">
                                        <a data-fancybox="gallery" href="assets/home/images/gall2.png">
                                            <img src="assets/home/images/gall2.png" alt="">
                                        </a>
                                        <a data-fancybox="gallery" href="assets/home/images/gall5.png">
                                            <img src="assets/home/images/gall5.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-6 one">
                                        <a data-fancybox="gallery" href="assets/home/images/gall3.png">
                                            <img src="assets/home/images/gall3.png" alt="">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 one-big" style="padding:0">
                                <a data-fancybox="gallery" href="assets/home/images/gall7.png">
                                    <img src="assets/home/images/gall7.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>--}}
</section>
<section class="useful-links">
	<div class="container">
		<div class="title">
			<div>
				<h2>@lang('home.useful_links')</h2>
				<div class="arrows">
					<i class="fa fa-angle-left use-left"></i>
					<i class="fa fa-angle-right use-right"></i>
				</div>
			</div>
			<hr />
			<hr class="dark"/>
		</div>
	</div>
	<div class="container">
		<div class="links-slider">
			<div class="link-card">
				<img src="assets/home/images/uztemir.png" alt="temir_yollari">
				<a href="http://railway.uz" target="_blank">
					@lang('home.use_links1')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/auksion.png" alt="e-auksion">
				<a href="https://e-auksion.uz/" target="_blank">@lang('home.use_links2')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/link.png" alt="government">
				<a href="https://www.gov.uz" target="_blank">@lang('home.use_links3')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/palata.png" alt="parliament">
				<a href="http://parliament.gov.uz" target="_blank">@lang('home.use_links4')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/gerb.png" alt="">
				<a href="https://davaktiv.uz/ru/" target="_blank">
					@lang('home.use_links5')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/lexuz.png" alt="lex.uz">
				<a href="https://lex.uz/" target="_blank" >@lang('home.use_links6')
				</a>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="title">
			<div>
				<h2>@lang('home.statistics')</h2>
			</div>
			<hr />
			<hr class="dark" />
		</div>
	</div>
	<div class="stats">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="stat-card">
						<span class="stat-count">64</span>
						<hr>
						<div class="stat-title">
							<span>@lang('home.stat1_1') <br> @lang('home.stat1_2')</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="stat-card">
						<span class="stat-count">26</span>
						<hr>
						<div class="stat-title">
							<span>@lang('home.stat2_1') <br> @lang('home.stat2_2')</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="stat-card">
						<span class="stat-count">4800</span>
						<hr>
						<div class="stat-title">
							<span>@lang('home.stat3_1') <br> @lang('home.stat3_2')</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="stat-card">
						<span class="stat-count">120 </span>
						<hr>
						<div class="stat-title">
							<span>@lang('home.stat_year') @lang('home.stat4_1') <br> @lang('home.stat4_2')</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="useful-links" id="partners">
	<div class="container">
		<div class="title">
			<div>
				<h2>@lang('home.partners')</h2>
				<div class="arrows">
					<i class="fa fa-angle-left use-left-2"></i>
					<i class="fa fa-angle-right use-right-2"></i>
				</div>
			</div>
			<hr />
			<hr class="dark"/>
		</div>
	</div>
	<div class="container">
		<div class="links-slider-2">
			<div class="link-card">
				<img src="{{ asset('assets/home/images/uzkabel.png') }}" alt="" style="width: 100%">
				<a href="http://uzkabel.uz/">@lang('home.partner2')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/cropped-3-1.png" alt="" style="width: 100%">
				<a href="http://kazygurtzholy.kz/">@lang('home.partner3')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/dielogo.png" alt="" style="width: 100%">
				<a href="https://www.di-electric.com.ua/">@lang('home.partner4')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/logo_talco.png" alt="" style="width: 100%">
				<a href="https://talco.com.tj/">@lang('home.partner5')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/osookg-logo.png" alt="" style="width: 100%">
				<a href="https://www.osoo.kg/">@lang('home.partner6')
				</a>
			</div>
			<div class="link-card">
				<img src="assets/home/images/uztemir.png" alt="" style="width: 100%">
				<a href="http://railway.uz">@lang('home.partner1')
				</a>
			</div>
		</div>
	</div>
</section>
<section class="contacts" id="contacts">
	<div class="container">
		<div class="title">
			<div>
				<h2>@lang('home.contacts')</h2>
			</div>
			<hr />
			<hr class="dark"/>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contacts-images">
					<div class="first-img">
						<img src="{{asset('images/geo.png')}}" alt="">
						<span>


								@lang('home.contact1') <br>
								@lang('home.contact2') <br>
								@lang('home.contact3')
							{{--	<pre>
									{{ $home['address'][$l] }}
								</pre>--}}
							</span>
					</div>
					<div class="second-img">
						<img src="{{asset('images/document.png')}}" alt="">
						<span>998 (71) 233-65-84</span>
					</div>
					<div class="third-img">
						<img src="{{asset('images/call.png')}}" alt="">
						<span>998 (71) 237-88-85</span>
					</div>
					<div class="fourth-img">
						<img src="{{asset('images/mail.png')}}" alt="">
						<span>infouptrz@gmail.com</span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<iframe style="border: 2px solid #2696f8;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.040762398899!2d69.28676351572472!3d41.28621731022324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef54b3c208f59%3A0x7b30f40357e1cc2b!2zNjQg0YPQu9C40YbQsCDQnNC10YXRgNC20L7QvSwg0KLQsNGI0LrQtdC90YIsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1604379689130!5m2!1sru!2s"
						width="90%" height="500" frameborder="1" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						{{--<div class="icons-icons">
							<a href="#"><i class="fa fa-cloud" aria-hidden="true"></i></a>
							<a href="#"><i></i></a>
							<a href="#"><i></i></a>
						</div>--}}
			</div>
		</div>
	</div>
	<div class="fa fa-angle-up to-up" aria-hidden="true" style="padding: 12px 0 0 0; border-radius: 50%">

	</div>

</section>
@include('frontend.frontLayout.front_footer')


<script>
	(function ($) {
		'use strict';

		var browserWindow = $(window);

		// :: 1.0 Preloader Active Code
		browserWindow.on('load', function () {
			$('.preloader').fadeOut('slow', function () {
				$(this).remove();
			});
		});
	})(jQuery);
</script>



<script src="{{asset('assets/jquery/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/slick/slick.js')}}"></script>


<script>

	jQuery(($) => {
		$(window).scroll(function(){
			if ($(this).scrollTop() > 780) $('.to-up').fadeIn();
			else $('.to-up').fadeOut();    });
		$('.to-up').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 566);
			return false;
		});});
	document.addEventListener('DOMContentLoaded', () => {
		let toTopBtn = document.querySelector('.to-up');
		window.onscroll = function () {
			if (window.pageYOffset > 580) {
				toTopBtn.style.display = 'block'
			}
			else {
				toTopBtn.style.display = 'none'
			}    }

		toTopBtn.addEventListener('click', function () {
			window.scrollBy({
				top: -document.documentElement.scrollHeight,
				behavior: 'smooth'
			});    });});

</script>

<script>
	$(window).on('load', function(){

		//Vide.js - video background
		$('#header_video').vide('assets/intro', {
			bgColor: '#64947b'
		});
	});
</script>
{{--<script type="text/javascript" charset="windows-1251" src="assets/mistakes/mistakes.js"></script>--}}

<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>

<script src="{{ asset('assets/mistake/mistakes.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

{{--special_view--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
<script src="{{ asset('js/frontend_js/special_view/dist/specialview.js') }}"></script>
<script type="text/javascript">
	SpecialView.run();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="assets/Vide/jquery.vide.min.js"></script>
<script type="text/javascript">
	function setDatepicker(_this) {

		/* Get the parent class name so we
            can show date picker */
		let className = $(_this).parent()
				.parent().parent().attr('class');

		// Remove space and add '.'
		let removeSpace = className.replace(' ', '.');

		// jQuery class selector
		$("." + removeSpace).datepicker({
			format: "dd/mm/yyyy",

			// Positioning where the calendar is placed
			orientation: "bottom auto",
			// Calendar closes when cursor is
			// clicked outside the calendar
			autoclose: true,
			showOnFocus: "false"
		});
	}
</script>
</body>

</html>
