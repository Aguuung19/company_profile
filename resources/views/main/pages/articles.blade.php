@extends('layouts.main')

@section('content')
    <section class="articles">
        <div class="container">
            <div class="row text-center">
                <h1 class="articles-header">
                    Berita
                </h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-12 p-3 mx-3 g-3 articles-box" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{url('/article-detail')}}">
                                <div class="articles-wrap">
                                    <div class="articles-img" style="background : url('{{asset('images/image1.webp')}}')">

                                    </div>
                                </div>
                                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                                <p class="excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ea?</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-12 p-3 mx-3 g-3 articles-box" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{url('/article-detail')}}">
                                <div class="articles-wrap">
                                    <div class="articles-img" style="background : url('{{asset('images/image1.webp')}}')">

                                    </div>
                                </div>
                                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                                <p class="excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ea?</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-12 p-3 mx-3 g-3 articles-box" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{url('/article-detail')}}">
                                <div class="articles-wrap">
                                    <div class="articles-img" style="background : url('{{asset('images/image1.webp')}}')">

                                    </div>
                                </div>
                                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                                <p class="excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ea?</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-12 p-3 mx-3 g-3 articles-box" data-aos="fade-up" data-aos-delay="400">
                            <a href="{{url('/article-detail')}}">
                                <div class="articles-wrap">
                                    <div class="articles-img" style="background : url('{{asset('images/image1.webp')}}')">

                                    </div>
                                </div>
                                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                                <p class="excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ea?</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-12 p-3 mx-3 g-3 articles-box" data-aos="fade-up" data-aos-delay="500">
                            <a href="{{url('/article-detail')}}">
                                <div class="articles-wrap">
                                    <div class="articles-img" style="background : url('{{asset('images/image1.webp')}}')">

                                    </div>
                                </div>
                                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                                <p class="excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ea?</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-12 p-3 mx-3 g-3 articles-box" data-aos="fade-up" data-aos-delay="600">
                            <a href="{{url('/article-detail')}}">
                                <div class="articles-wrap">
                                    <div class="articles-img" style="background : url('{{asset('images/image1.webp')}}')">

                                    </div>
                                </div>
                                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                                <p class="excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ea?</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection