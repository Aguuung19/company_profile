@extends('layouts.main')

@section('content')

<section class="visionAndMission">
    <div class="container">
        <div class="row">
            <h1 class="vm-header">Visi Misi</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 align-self-center">
                <h1 class="vision-header">Visi</h1>
                <p class="vision-caption">
                    &emsp; Visi dari Universitas Balikpapan adalah Menjadi "Terwujudnya Universitas Balikpapan Sebagai Lembaga
                    Pendidikan Tinggi Yang Menghasilkan Sumber Daya Manusia Unggul, Mandiri, dan Berbudaya Dalam Memajukan Ipteks,
                    Melalui Tata Kelola Yang Baik (Good University Governance) Pada Tahun 2025"
                </p>
            </div>
            <div class="col-lg-6 col-12 d-none d-lg-block">
                <div class="vision-wrap">
                    <div class="vision-img" style="background: url('https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2')"></div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6 col-12 d-none d-lg-block">
                <div class="vision-wrap">
                    <div class="vision-img" style="background: url('https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2')"></div>
                </div>
            </div>

            <div class="col-lg-6 col-12 align-self-center">
                <h1 class="vision-header">Misi</h1>
                <p class="vision-caption">
                    Misi Universitas Balikpapan memiliki beberapa poin sebagai berikut : <br>
                    1. Melaksanakan pendidikan tinggi yang bermutu dan menghasilkan lulusan yang berintegritas tinggi sesuai dengan tuntutan
                    masyarakat lokal, nasional dan internasional. <br>
                    2. Mengembangkan penelitian. <br>
                    3. Melaksanakan pengabdian kepada masyarakat sesuai dengan kebutuhan lokal.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection