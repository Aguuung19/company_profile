@extends('layouts.main')

@section('content')
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 align-self-center">
                <h1 class="hero-header">Badan Pengelola Sistem Teknologi Informasi</h1>
                <p class="hero-caption">Unit Pelaksana teknik di bidang pengembangan teknologi informasi dan komunikasi di <b>Universitas Balikpapan</b> </p>
                <a href="#services" class="btn btn-hero">Get Started</a>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-5 mt-lg-0" >
                <div class="hero-wrap" data-aos="zoom-in" data-aos-interval="3000">
                    <div class="hero-img" fetchpriority="high" style="background: url('{{asset('images/image1.webp')}}')">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service" id="services">
    <div class="container">
        <h2 class="service-header">Layanan BPSTI Univesitas Balikpapan </h2>
    </div>
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-interval="3000">
            <div class="col-lg-10 col-12 ">
                <div class="row service-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href="#"><p class="service-subheader"><i class="fa-solid fa-laptop-code" style="color: #005bc5;"></i> Website & Sistem Informasi</p></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                       <a href="#"> <p class="service-subheader"><i class="fa-solid fa-wifi" style="color: #005bc5;"></i> Jaringan</p></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href="#"><p class="service-subheader"><i class="fa-solid fa-calendar-days" style="color: #005bc5;"></i> Layanan Media / Kegiatan Acara</p></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href="#"><p class="service-subheader"><i class="fa-solid fa-users" style="color: #005bc5;"></i> Pengajuan Akun / Reset Password</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <h1 class="news-header">Berita Terbaru</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 news-box" data-aos="fade-up" data-aos-interval="5000">
                <div class="carousel slide" id="newscarousel" data-bs-interval="5000" data-bs-touch="true" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#newscarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#newscarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#newscarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="{{url('article-detail')}}">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="news-wrap">
                                            <div class="news-img" style="background: url('{{asset('images/image1.webp')}}')">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12 align-self-center mt-3 mt-lg-0">
                                            <h2 class="news-subheader">Judul Berita 1</h2>
                                            <p class="news-caption">some excerpt here</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="{{url('article-detail')}}">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="news-wrap">
                                            <div class="news-img" style="background: url('{{asset('images/image1.webp')}}')">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12 align-self-center mt-3 mt-lg-0">
                                            <h2 class="news-subheader">Judul Berita 2</h2>
                                            <p class="news-caption">some excerpt here</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="{{url('article-detail')}}">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="news-wrap">
                                            <div class="news-img" style="background: url('{{asset('images/image1.webp')}}')">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12 align-self-center mt-3 mt-lg-0">
                                            <h2 class="news-subheader">Judul Berita 3</h2>
                                            <p class="news-caption">some excerpt here</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#newscarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#newscarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq" id="faq">
    <div class="container">
        <h2 class="faq-header">FAQ</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 mt-3">
                <div class="faq-qa mt-2" data-aos="fade-up" data-aos-interval="3000">
                    <p>
                        <a class="btn faq-question faq-box" data-bs-toggle="collapse" href="#question1" role="button" aria-expanded="false" aria-controls="question1">
                            01. Pertanyaan Pertama
                        </a>
                    </p>
                    <div class="collapse" id="question1">
                        <div class=" faq-answer faq-box">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
                <div class="faq-qa mt-2" data-aos="fade-up" data-aos-interval="3000" data-aos-delay="100">
                    <p>
                        <a class="btn faq-question faq-box" data-bs-toggle="collapse" href="#question2" role="button" aria-expanded="false" aria-controls="question2">
                            02. Pertanyaan Kedua
                        </a>
                    </p>
                    <div class="collapse" id="question2">
                        <div class=" faq-answer faq-box">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
                <div class="faq-qa mt-2" data-aos="fade-up" data-aos-interval="3000" data-aos-delay="200">
                    <p>
                        <a class="btn faq-question faq-box" data-bs-toggle="collapse" href="#question3" role="button" aria-expanded="false" aria-controls="question3">
                            03. Pertanyaan Ketiga
                        </a>
                    </p>
                    <div class="collapse" id="question3">
                        <div class=" faq-answer faq-box">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
                <div class="faq-qa mt-2" data-aos="fade-up" data-aos-interval="3000" data-aos-delay="300">
                    <p>
                        <a class="btn faq-question faq-box" data-bs-toggle="collapse" href="#question4" role="button" aria-expanded="false" aria-controls="question4">
                            04. Pertanyaan Keempat
                        </a>
                    </p>
                    <div class="collapse" id="question4">
                        <div class=" faq-answer faq-box">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
                <div class="faq-qa mt-2" data-aos="fade-up" data-aos-interval="3000" data-aos-delay="400">
                    <p>
                        <a class="btn faq-question faq-box" data-bs-toggle="collapse" href="#question5" role="button" aria-expanded="false" aria-controls="question5">
                            05. Pertanyaan Kelima
                        </a>
                    </p>
                    <div class="collapse" id="question5">
                        <div class=" faq-answer faq-box">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection