@extends('layouts.structureLayout.structure_design')
@section('structure')


    <section class="lmz">
        <div class="container">
            <div class="lmz-title">
                <h2>структурные подразделения</h2>
            </div>
            <div class="lmz-name">
                <h3>Бухгалтерия</h3>
            </div>
            <div id="links" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/BUX(1).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/BUX(2).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/BUX(3).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/BUX(5).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/BUX(6).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/BUX(7).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/BUX(8).jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/structure/structures/end-img.png') }}" alt="">
            </div>
            <div class="lmz-text_disc">
                <span>
                    2.1.	Обеспечение пользователей полной, достоверной, своевременной финансовой и бухгалтерской информацией.
                    2.2.	Формирование на счетах бухгалтерского учета полных и достоверных данных о состоянии и движении активов, состоянии имущественных прав и обязательств.
                    2.3.	Обобщение данных бухгалтерского учета в целях эффективного управления.
                    2.4.	Составление финансовой, налоговой и иной отчетности.
                </span>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/structure/structures/end-img.png') }}" alt="">
            </div>
        </div>
    </section>

@endsection