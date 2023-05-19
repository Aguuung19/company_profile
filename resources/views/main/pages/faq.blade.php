@extends('layouts.main')

@section('content')
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