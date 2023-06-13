<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Unit Pelaksana teknik di bidang pengembangan teknologi informasi dan komunikasi di Universitas Balikpapan.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Profile Company</title>

    {{-- Bootsrap 5.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- Bootsrap Icon CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Local Style --}}
    <link rel="stylesheet" href="{{asset('/assets/style/admin/admin.css')}}">
    {{-- CK Editor 5 --}}
    <script rel="pre-fetch" src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
</head>
<body>
@include('layouts/components/admin/navAdmin')
<section class="page-content">
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto mb-5 px-0 stick-top">
           @include('layouts/components/admin/sidebar')
        </div>
        <main class="col ps-md-2 pt-2 main-content">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</div>
</section>
<footer>
  @2023 BPSTI Universitas Balikpapan
</footer>
</body>

{{-- Bootsrap 5.3 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
 <script>
        var allEditors = document.querySelectorAll('.ckeditor');
        for (var i = 0; i < allEditors.length; ++i) {
          ClassicEditor.create(allEditors[i]);
        }
    </script>
</html>