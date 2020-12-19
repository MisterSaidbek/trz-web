<footer style="@media(max-width: 1159px) {
  .contacts .first-img {
    width: 250px;
  }
  .contacts .second-img {
    width: 250px;
  }
  .contacts .third-img {
    width: 250px;
  }
  .contacts .fourth-img {
    width: 250px;
  }
  .over-text-padding .logo h2 {
    font-size: 25px;
  }
}

@media(max-width: 1059px) {
  .contacts .first-img {
    width: 202px;
  }
  .contacts .second-img {
    width: 202px;
  }
  .contacts .third-img {
    width: 202px;
  }
  .contacts .fourth-img {
    width: 202px;
  }
}

@media(max-width: 1024px) {
  .search {
    margin-right: 25px;
  }
}

@media(max-width: 991px) {
  .stats .col-lg-3.col-md-6 {
    display: flex;
    justify-content: center;
    padding: 20px 0;
  }
  .over-text-padding .logo h2 {
    font-size: 22px;
  }
}

@media(max-width: 841px) {
  .over-text-padding .logo h2 {
    font-size: 20px;
  }
}

@media(max-width: 767px)  {
  .over-text-padding .logo h2 {
    font-size: 32px;
  }
  .contacts .first-img {
    width: 250px;
  }
  .contacts .second-img {
    width: 250px;
  }
  .contacts .third-img {
    width: 250px;
  }
  .contacts .fourth-img {
    width: 250px;
  }
  .search {
    margin-right: -35px;
  }
}

@media(max-width: 564px) {
  .over-text-padding .logo h2 {
    font-size: 25px;
  }
  .search {
    margin-right: 30px;
  }
}

@media(max-width: 500px) {
  .showcase h1 {
    font-size: 30px;
  }
}

@media(max-width: 468px) {
  .over-text-padding .logo h2 {
    font-size: 21px;
  }
  .showcase small {
    font-size: 22px;
  }
}

@media(max-width: 414px) {
  .search {
    margin-right: 35px;
  }
  .phone {
    display: none;
  }
  .showcase h1 {
    font-size: 28px;
  }
}

@media(max-width: 360px) {
  .search {
    margin-right: 55px;
  }
  footer .logo img {
    height: 80px;
  }
  .over-text-padding .logo h2 {
    font-size: 18px;
  }
  .showcase h1 {
    font-size: 22px;
  }
}

@media(max-width: 320px) {
  .small-ann .text button {
    font-size: 12px;
  }
  .big-ann abbr {
    font-size: 15px;
  }
  .small, small {
    font-size: 12px;
  }
  .over-text-padding .logo h2 {
    font-size: 14px;
  }
}">
    <!-- <div class="just-overlay"></div> -->

    <div class="over-text-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <img src="{{ asset('assets/home/images/logoz.png') }}" alt="">
                        <div class="div">
                            <small>@lang('home.content')</small>
                            <h2>"O'ZTEMIRYO'LMASHTA'MIR"</h2>
                        </div>
                    </div>
                    <div class="legal">
                        @lang('footer.text1')
                    </div>
                    <div class="copyright">
                        &copy @lang('footer.text2')
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mistake">
                        @lang('footer.text3')
                    </div>

                </div>
            </div>
        </div>
    </div>

</footer>
<script type="text/javascript" charset="windows-1251" src="assets/mistakes/mistakes.js"></script>

