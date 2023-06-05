@extends('layouts.home')

@section('content')
    <section class="landing-page-setting" data-aos="zoom-in" data-aos-delay="100">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success')}}
        </div>
        @endif

       <div class="row">
            <div class="col align-self-center">
                <h1 class="lp-header">Landing Page Setting</h1> 
            </div>
            <div class="col align-self-center text-center text-lg-end pt-3 pt-lg-0 pt-md-0">
                <a href="#" class="btn btn-lp-edit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-pencil-square"></i> Edit</a>
            </div>
       </div>

       <div class="row">
        <div class="col-lg-6 col-12">
            <div class="form-group pt-5">
                <h2 class="lp-subheader">Logo :</h2>
                <div class="logo-wrap">
                    <div class="img-master" style="background: url('{{asset('/images/'.$item->logo)}}')">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="form-group pt-5">
                <h2 class="lp-subheader"> Footer Logo :</h2>
                <div class="logo-wrap">
                    <div class="img-master" style="background: url('{{asset('/images/'.$item->footer_logo)}}')">

                    </div>
                </div>
            </div>
        </div>
       </div>

        <hr>

       <div class="row">
            <div class="col-lg-6 col-12 align-self-center">
                <div class="form-group pt-5">
                    <h2 class="lp-subheader">Hero Title :</h2>
                    <h1 class="lp-header">{{$item->hero_title}}</h1>
                    <hr>
                    <h2 class="lp-subheader pt-5">Hero Description :</h2>
                    <p class="lp-caption">{!!$item->hero_desc!!} </p>
                    <hr>
                    <h2 class="lp-subheader pt-5">Hero Button :</h2>
                    <a href="#services" class="btn btn-hero" disabled>{{$item->hero_btn}}</a>
                    <h2 class="lp-subheader pt-3">Hero Button Link :</h2>
                    <p class="lp-caption">{{$item->hero_btn_link}} </p>
                    <hr>

                </div>

            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group pt-5">
                    <h2 class="lp-subheader">Hero Image :</h2>
                    <div class="hero-wrap">
                        <div class="img-master" style="background: url('{{asset('/images/'.$item->hero_banner)}}')">

                        </div>
                    </div>
                </div>
            </div>
       </div>

       <div class="d-block d-sm-block d-xs-block d-md-block d-lg-none pt-5">
        <hr>
       </div>

       <div class="form-group pt-5">
        <h2 class="lp-subheader">Section 2 Title :</h2>
        <h1 class="lp-header">{{$item->section2_title}}</h1>
       </div>
       <hr>

       <div class="row">
            <div class="col-lg-6 col-12 pt-5">
                <div class="form-group">
                    <h2 class="lp-subheader">Footer section 1 Title :</h2>
                    <h1 class="lp-header"><b>{{$item->footer_title1}}</b></h1>
                    <div class="table-responsive mx-auto">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-truncate">No</th>
                                    <th class="text-truncate">Name</th>
                                    <th class="text-truncate">Section</th>
                                    <th class="text-truncate">Link</th>
                                    <th class="text-truncate">
                                        <a href="#" class="btn btn-success"data-bs-toggle="offcanvas" data-bs-target="#offCanvasFooter" aria-controls="offCanvasFooter">
                                            <i class="bi bi-plus-circle"></i> 
                                            Tambah
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($footer1 as $link)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$link->title}}</td>
                                        <td>{{$link->section}}</td>
                                        <td><a href="{{$link->link}}" target="{{$link->target}}">{{$link->link}}</a></td>
                                        <td>
                                            <form action="{{url('footer_link/'.$link->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure to delete this data?')"><i class="bi bi-trash "></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 pt-5">
                <div class="form-group">
                    <h2 class="lp-subheader">Footer section 2 Title :</h2>
                    
                    <h1 class="lp-header"><b>{{$item->footer_title2}}</b></h1>
                    <div class="table-responsive mx-auto">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-truncate">No</th>
                                    <th class="text-truncate">Name</th>
                                    <th class="text-truncate">Section</th>
                                    <th class="text-truncate">Link</th>
                                    <th class="text-truncate"> 
                                        <a href="#" class="btn btn-success"data-bs-toggle="offcanvas" data-bs-target="#offCanvasFooter" aria-controls="offCanvasFooter">
                                            <i class="bi bi-plus-circle"></i> 
                                            Tambah
                                        </a>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                               @foreach($footer2 as $link2)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$link2->title}}</td>
                                        <td>{{$link2->section}}</td>
                                        <td><a href="{{$link2->link}}" target="{{$link2->target}}">{{$link2->link}}</a></td>
                                        <td>
                                            <form action="{{url('footer_link/'.$link2->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure to delete this data?')"><i class="bi bi-trash "></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
       </div>
    </section>

    <div class="offcanvas offcanfas-lg offcanvas-bottom"  tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title header" id="offcanvasRightLabel">Edit Landing Page Setting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @include('admin.Landing-Page.edit')
        </div>
    </div>

    <div class="offcanvas offcanfas-lg offcanvas-bottom"  tabindex="-1" id="offCanvasFooter" aria-labelledby="offCanvasFooterLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title header" id="offcanvasRightLabel">Tambah Footer Links</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @include('admin.Footer-Links.add')
        </div>
    </div>


@endsection