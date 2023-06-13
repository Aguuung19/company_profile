@extends('layouts.main')

@section('content')
<section class="faq" id="faq">
    <div class="container">
        <h2 class="faq-header">FAQ</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 mt-3">
                 @foreach($faq as $index => $item)
                    @php     
                        $delay = ($index + 1) * 100;
                       
                    @endphp

                    <div class="faq-qa mt-2" data-aos="fade-up" data-aos-interval="3000" data-aos-delay="{{$delay}}">

                            <a class="btn faq-question faq-box" data-bs-toggle="collapse" href="#question{{$item->id}}" role="button" aria-expanded="false" aria-controls="question{{$item->id}}">
                                {!! $item->question !!}
                            </a>

                        <div class="collapse" id="question{{$item->id}}">
                            <div class="faq-answer faq-box">
                                {!! $item->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection