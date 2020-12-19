<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>@lang('home.komitet_page')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="{{ asset('assets/home/images/logoz.png') }}">
	<link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">

	<link rel="stylesheet" href="{{ asset('/css/frontend_css/komitets/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/frontend_css/komitets/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/frontend_css/komitets/style.css') }}">
</head>
<body onclick="hide_menu()">
@include('frontend.frontLayout.front_header')
<section class="commit">
	<div class="container">
		<div class="commit-title">
			<h2>@lang('home.komitet_page')</h2>
		</div>
		<div class="commit-gallery">
			<div id="first" class="row">
				<div class="col-md-6">
					<div class="gallery-left">
						<div class="gallery-left_date">
							<h1>@lang('commities.commity1')</h1>
						</div>
						<div class="gallery-left_disc">
							<p>Производит ремонт в объёме КР-1, КР-2, КРП тепловозов типа</p>
							<div class="gallery-left_disc__pz">
								<ul>
									<li>- ТЭМ10</li>
									<li>- ТЭМ2</li>
									<li>- ТЭ116</li>
								</ul>
								<ul>
									<li>- ЧМЭЗ</li>
									<li>- ТЭП70БС</li>
									<li>- UzTE16M</li>
								</ul>
							</div>
							<p>
								и электровозов переменного тока ВЛ80С, ВЛ60К <br>
								Численность цеха составляет - 153 человек.
							</p>
						</div>
						<div class="gallery-left_btn">
							<a href="{{ route('prof_commity') }}">@lang('about.detail')</a>
						</div>
					</div>
				</div>
				<div id="first2" class="col-md-6">
					<div class="gallery-right">
						<img src="{{ asset('images/frontend_images/komitets/kom1.jpg') }}" alt="">
					</div>
				</div>
			</div>
			<div id="second" class="row">
				<div id="second1" class="col-md-6">
					<div class="gallery-left2">
						<img src="{{ asset('/images/frontend_images/komitets/2.jpg') }}" alt="">
					</div>
				</div>
				<div id="second2" class="col-md-6">
					<div class="gallery-right2">
						<div class="gallery-right2_date">
							<h1>@lang('commities.commity2')</h1>
						</div>
						<div class="gallery-right2_disc">
							<p>
								<span>В 1934 году на оде построен первый в Средней Азии сталелитейный цех.</span><br>
								Кроме собственных нужд, стальным литьем завод обеспечивал <br>
								Среднеазиатскую, Самаро-Златоустскую, Туркистано-Сибирьскую <br>
								железную дорогу, а также предприятия сельхозмашиностроения республики.
							</p>
							<p>
								<span>В годы Второй мировой войны на заводе изготавливались бронепоезда,</span> <br>
								вагоны специального назначения, санитарные поезда, поезда «Водрем», <br>
								авиабомбы, снаряды, миномёты, ручные  гранаты.
							</p>
						</div>
						<div class="gallery-left_btn">
							<a href="{{ route('union_teens') }}">@lang('about.detail')</a>
						</div>
					</div>
				</div>
			</div>
			<div id="first" class="row">
				<div class="col-md-6">
					<div class="gallery-left">
						<div class="gallery-left_date">
							<h1>
								@lang('commities.burch1') <br>
								@lang('commities.burch2')
							</h1>
						</div>
						<div class="gallery-left_disc">
							<p>
								<span>Наш лагерь находится в горном ущелье Бурчи-Мулло Бостанлыкского</span><br>
								района Ташкентской области – 110 км от города Ташкента. Лагерь очень <br>
								компактный, зелёный, со всеми условиями и улучшенными планировками.
							</p>
							<p>
								<span>Вместимость лагеря рассчитана на 320 детей в возрасте от 7 до 14 лет.</span><br>
								Предусмотрены 4 смены, продолжительность каждой смены составляет <br>
								двенадцать дней.
							</p>
						</div>
						<div class="gallery-left_btn">
							<a href="{{route('burchimullo')}}">@lang('about.detail')</a>
						</div>
					</div>
				</div>
				<div id="first2" class="col-md-6">
					<div class="gallery-right">
						<img src="{{ asset('/images/frontend_images/komitets/3.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="history-end_btn">
			<img src="{{ asset('/images/frontend_images/komitets/end-img.png') }}" alt="">
		</div>
	</div>
</section>
@include('frontend.frontLayout.front_footer')




<script src="{{ asset('js/frontend_js/komitets/jq.js') }}">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script src="{{ asset('js/frontend_js/slider/slider.js') }}"></script>
<script src="{{ asset('js/frontend_js/slider/mobile_menu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="{{ asset('js/frontend_js/komitets/owl.carousel.js') }}"></script>
</body>
</html>