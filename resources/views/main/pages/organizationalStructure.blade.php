@extends('layouts.main')

@section('content')
    <section class="organizationalStructure">
        <div class="container">
            <div class="row">
                <h1 class="organization-header">{{$item->organization_structure_title}}</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12 organization-box">
                    <div class="organization-wrap" data-aos="zoom-in" data-aos-interval="3000">
                        <div class="organization-img" style="background: url('{{asset('/images/'.$item->organization_structure_image)}}')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection