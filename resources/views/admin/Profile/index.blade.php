@extends('layouts.home')

@section('content')
    <section class="profile-setting" data-aos="zoom-in" data-aos-delay="100">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success')}}
        </div>
        @endif

        <div class="row">
            <div class="col align-self-center">
                <h1 class="p-header">Profile Setting</h1>
            </div>
            <div class="col align-self-center text-center text-lg-end pt-3 pt-lg-0 pt-md-0">
                <a href="#" class="btn btn-p-edit" data-bs-toggle="offcanvas" data-bs-target="#editCanvas" aria-controls="editCanvas"><i class="bi bi-pencil-square"></i>Edit</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group pt-5">
                    <h2 class="p-subheader">Section Title :</h2>
                    <h1 class="p-header">{{$item->title}}</h1>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="form-group pt-5">
                    <h2 class="p-subheader">Visi :</h2>
                    <div class="p-caption">
                        {!!$item->vision!!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group pt-5">
                    <h2 class="p-subheader">Cover :</h2>
                    <div class="hero-wrap">
                        <div class="img-master" style="background: url('{{asset('/images/'.$item->vision_image)}}')">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="form-group pt-5">
                    <h2 class="p-subheader">Misi :</h2>
                    <div class="p-caption">
                        {!!$item->mission!!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group pt-5">
                    <h2 class="p-subheader">Cover :</h2>
                    <div class="hero-wrap">
                        <div class="img-master" style="background: url('{{asset('/images/'.$item->mission_image)}}')">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-12">
                <div class="form-group pt-5">
                    <h2 class="p-subheader">Struktur Organisasi :</h2>
                    <h1 class="p-header">{{$item->organization_structure_title}}</h1>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6 col-12 pt-5">
                    <h2 class="p-subheader">Cover :</h2>
                    <div class="team-wrap">
                        <div class="img-master" style="background: url('{{asset('/images/'.$item->organization_structure_image)}}')">

                        </div>
                    </div>
            </div>
            <div class="col-lg-6 col-12 pt-5">
                <h2 class="p-subheader">Teams Banner :</h2>
                <div class="team-wrap">
                    <div class="img-master" style="background: url('{{asset('/images/'.$item->teams_banner)}}')">

                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="offcanvas offcanfas-lg offcanvas-bottom"  tabindex="-1" id="editCanvas" aria-labelledby="editCanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title header" id="offcanvasRightLabel">Edit Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @include('admin.Profile.edit')
        </div>
    </div>



@endsection