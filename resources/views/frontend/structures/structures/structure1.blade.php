@extends('layouts.structureLayout.structure_design')
@section('structure')


    <section class="lmz">
        <div class="container">
            <div class="lmz-title">
                <h2>структурные подразделения</h2>
            </div>
            <div class="lmz-name">
                <h3>Отдел главного технолога</h3>
            </div>
            <div id="links" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/ogt(1).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/ogt(2).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/ogt(3).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/ogt(4).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/ogt(5).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/ogt(6).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/ogt(7).jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/structure/structures/end-img.png') }}" alt="">
            </div>
            <div class="lmz-text_disc">
                <span>
                    1.2.	Проведение не предусмотренных утвержденным технологическим процессом выборочных проверок качества отремонтированного подвижного состава, их узлов, агрегатов, других объектов ремонта, а также изготовленной готовой продукции, выполнения отдельных технологических операций и переходов, а также другие проверки, необходимые для обеспечения выпуска продукции в соответствии с установленными требованиями.
                </span>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/structure/structures/end-img.png') }}" alt="">
            </div>
        </div>
    </section>
@endsection