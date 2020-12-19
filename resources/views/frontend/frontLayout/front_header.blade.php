
<nav>
<ul class="mobile-menu close">
    <li><a href="{{route('main')}}">@lang('header.home_menu1')</a></li>
    <li><a href="{{route('about-company')}}" >@lang('header.about_company')</a></li>
    <li><a href="{{route('factory')}}">@lang('header.manufacture_page')</a></li>
    <li><a href="{{route('modern')}}">@lang('header.modern_page')</a></li>
    <li><a href="{{route('structures')}}">@lang('header.structure_page')</a></li>
    <li><a href="{{route('commities')}}">@lang('home.komitet_page')</a></li>
    <li><a href="{{route('price')}}">@lang('header.price_page')</a></li>
</ul>

    <div class="container">
        <ul class="menu">
            <li><a href="{{route('main')}}">@lang('header.home_menu1')</a></li>
            <li><a href="{{route('about-company')}}" >@lang('header.about_company')</a></li>
            <li><a href="{{route('factory')}}">@lang('header.manufacture_page')</a></li>
            <li><a href="{{route('modern')}}">@lang('header.modern_page')</a></li>
            <li><a href="{{route('structures')}}">@lang('header.structure_page')</a></li>
            <li><a href="{{route('commities')}}">@lang('home.komitet_page')</a></li>
            <li><a href="{{route('price')}}">@lang('header.price_page')</a></li>
        </ul>
        <div class="hamburger">
            <span onclick="open_menu(event)">Меню</span>
        </div>
    </div>
</nav>
