@extends('layouts.main')

@section('content')

<section class="visionAndMission">
    <div class="container">
        <div class="row">
            <h1 class="vm-header">{{$item->title}}</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 align-self-center">
                <h1 class="vision-header">Visi</h1>
                <div class="vision-caption">
                    {!!$item->vision!!}
                </div>
            </div>
            <div class="col-lg-6 col-12 d-none d-lg-block">
                <div class="vision-wrap" data-aos="zoom-in" data-aos-interval="3000">
                    <div class="vision-img" style="background: url('https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2')"></div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6 col-12 d-none d-lg-block">
                <div class="vision-wrap" data-aos="zoom-in" data-aos-interval="3000">
                    <div class="vision-img" style="background: url('https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2')"></div>
                </div>
            </div>

            <div class="col-lg-6 col-12 align-self-center">
                <h1 class="vision-header">Misi</h1>
                <div class="vision-caption">
                    {!!$item->mission!!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection