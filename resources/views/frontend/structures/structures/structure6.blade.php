@extends('layouts.structureLayout.structure_design')
@section('structure')

    <section class="lmz">
        <div class="container">
            <div class="lmz-title">
                <h2>структурные подразделения</h2>
            </div>
            <div class="lmz-name">
                <h3>Центральная испытательная лаборатория</h3>
            </div>
            <div id="links" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/CIL(1).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/CIL(2).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/CIL(3).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/CIL(4).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/CIL(5).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/CIL(6).jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('images/frontend_images/structure/structures/CIL(7).jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/structure/structures/end-img.png') }}" alt="">
            </div>
            <div class="lmz-text_disc">
                <span>
                    Отдел главного энергетика осуществляет руководство эксплуатацией общезаводских энергетических установок, межцеховых коммуникаций, а также ведет технический надзор за состоянием внутрицехового оборудования.
                    Основными задачами отдела главного энергетика являются:
                    1. Бесперебойное и качественное снабжение завода электроэнергией, газом, сжатым воздухом, водой и другими видами энергии в количествах, обеспечивающих выполнение производственного плана предприятия;
                    2. Содержание в работоспособном состоянии всех энергоустановок завода путем организации правильной эксплуатации и планово-предупредительного
                    ремонта;
                    3. Повышение технического уровня эксплуатации энергооборудования и рациональное использование всех видов энергии, топлива и вторичных энергоресурсов.
                    В настоявшее время работниками ОГЭ особое внимание уделяется
                    внедрению энергосберегающего оборудования. Внедряется оборудование способствующее улучшению экологической обстановки.
                </span>
            </div>
            <div class="lmz-img">
                <img src="{{ asset('images/frontend_images/structure/structures/end-img.png') }}" alt="">
            </div>
        </div>
    </section>

@endsection