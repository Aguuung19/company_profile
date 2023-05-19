@extends('layouts.main')

@section('content')
    <section class="about-us">
        <div class="container">
            <div class="row text-center">
                <h1 class="us-header">Kontak</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row us-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-lg-4 col-12">
                            <div class="us-wrap">
                                <div class="us-img" style="background : url('{{asset('images/image1.webp')}}')">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12 mt-4 mt-lg-0">
                            <p class="us-caption">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Corrupti excepturi eveniet, ad debitis temporibus quae praesentium. 
                                Modi sapiente nisi libero quod illo labore saepe ducimus! Iure quidem eligendi nihil quo?
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5 us-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-12">
                            <h2 class="us-header">
                                #Note
                            </h2>
                            <p class="us-caption">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                Fugiat inventore officia voluptatum, vel dolore error ipsam impedit odio alias ratione. 
                                Est ducimus quasi tempora maxime reiciendis cum, labore quidem corrupti a consequuntur optio beatae 
                                incidunt voluptas nihil obcaecati dolorum atque vel quisquam. Molestias ex illo et rerum, placeat aspernatur libero.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection