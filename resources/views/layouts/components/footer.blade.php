<footer class="footer-main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row text-center text-lg-start">
                    <div class="col-lg-3 col-12">
                        <div class="footer-wrap">
                            <div class="footer-img" style="background: url('{{asset('images/footer.webp')}}')">

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mt-3 mt-lg-0">
                        <div class="row pb-3">
                            <div class="col-12">
                                <h1 class="footer-subheader">{{$home->footer_title1}}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-divide footer-list">
                                    @foreach($footer1 as $link)
                                        <li><a href="{{$link->link}}" target="{{$link->target}}">{{$link->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-3 mt-lg-0">
                        <div class="row pb-3">
                            <div class="col-12">
                                <h1 class="footer-subheader">{{$home->footer_title2}}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="footer-list">
                                    @foreach($footer2 as $link)
                                        <li><a href="{{$link->link}}" target="{{$link->target}}">{{$link->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <h1 class="footer-copyright">@2023 BPSTI UNIVERSITAS BALIKPAPAN</h1>
            </div>
        </div>
    </div>
</footer>