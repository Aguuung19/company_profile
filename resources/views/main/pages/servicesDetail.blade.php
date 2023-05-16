@extends('layouts.main')

@section('content')
<section class="services">
    <div class="container">
        <div class="row text-center">
            <h1 class="service-header">Kategori Layanan</h1>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <nav id="service-nav" class="h-100 fixed  flex-column align-items-stretch pe-2 border-end">
                            <nav class="nav flex-column">
                                <a href="#item-1" class="nav-link">Perbaikan Jaringan</a>
                                <a href="#item-2" class="nav-link">Permohonan Pemasangan Jaringan</a>
                                <a href="#item-3" class="nav-link">Item 3</a>
                                <a href="#item-4" class="nav-link">Item 4</a>
                            </nav>
                        </nav>
                    </div>
                    <div class="col-lg-9 col-12 mt-5 mt-lg-0">

                            <div class="service-desc" id="item-1">
                                <h1 class="service-header">Service 1</h1>
                                <p class="service-caption">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                    Libero iusto iste, consequuntur id nihil amet? Incidunt unde, 
                                    sint, impedit reiciendis natus minus numquam voluptas possimus cumque distinctio, 
                                    nesciunt eaque culpa ut! Fuga perferendis ad voluptate odit possimus. 
                                    Nobis quae delectus eos architecto aliquid harum consequatur excepturi autem repellat eaque. Neque!
                                </p>
                            </div>
                            <div class="service-desc" id="item-2">
                                <h1 class="service-header">Service 2</h1>
                                <p class="service-caption">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ab tempore eum, hic ratione architecto at labore nemo qui neque nisi exercitationem,
                                    perferendis assumenda. Culpa facere, incidunt quibusdam inventore blanditiis,
                                    ratione corrupti alias veritatis perspiciatis sint a facilis quia ab nesciunt amet similique 
                                    quisquam iusto porro dolor dolorem repellendus! Enim, est!
                                </p>
                            </div>
                            <div class="service-desc" id="item-3">
                                <h1 class="service-header">Service 3</h1>
                                <p class="service-caption">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ab tempore eum, hic ratione architecto at labore nemo qui neque nisi exercitationem,
                                    perferendis assumenda. Culpa facere, incidunt quibusdam inventore blanditiis,
                                    ratione corrupti alias veritatis perspiciatis sint a facilis quia ab nesciunt amet similique 
                                    quisquam iusto porro dolor dolorem repellendus! Enim, est!
                                </p>
                            </div>
                            <div class="service-desc" id="item-4">
                                <h1 class="service-header">Service 4</h1>
                                <p class="service-caption">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ab tempore eum, hic ratione architecto at labore nemo qui neque nisi exercitationem,
                                    perferendis assumenda. Culpa facere, incidunt quibusdam inventore blanditiis,
                                    ratione corrupti alias veritatis perspiciatis sint a facilis quia ab nesciunt amet similique 
                                    quisquam iusto porro dolor dolorem repellendus! Enim, est!
                                </p>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection