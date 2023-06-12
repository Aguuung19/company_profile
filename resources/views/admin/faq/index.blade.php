@extends('layouts.home')

@section('content')
    <section class="faq-setting" data-aos="zoom-in" data-aos-delay="100">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        
        <div class="row">
            <div class="col-align-self-center">
                <h1 class="f-header">Frequenly Asked Questions</h1>
                <a href="#" class="btn btn-f-edit mt-3" data-bs-toggle="offcanvas" data-bs-target="#offCanvasAdd" aria-target="offCanvasAdd">
                    <i class="bi bi-plus-circle"></i> Tambah
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="table-reponsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faq as $item)
                                <tr>
                                    <td><b>{{$loop->iteration}}</b></td>
                                    <td>{!!$item->question!!}</td>
                                    <td>{!!$item->answer!!}</td>
                                    <td>{{$item->status}}</td>
                                    <td>
                                        <a href="#" class="badge text-bg-primary" data-bs-toggle="offcanvas" data-bs-target="#offCanvasEdit" aria-controls="offCanvasEdit"><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{url('faq/'.$item->id)}}" method="POST">
                                            @method('delete')
                                            @csrf

                                            <button class="badge text-bg-danger border-0" type="submit" onclick="return confirm('Delete Question?')"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="offcanvas offcanfas-lg offcanvas-bottom" tabindex="-1" id="offCanvasAdd" aria-labelledby="offCanvasAddLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title header" id="offcanvasRightLabel">Add FAQ</h5>
            <button type="submit" class="btn-close" data-bs-dismiss="offcanvas" aria-label="CLose"></button>
        </div>
        <div class="offcanvas-body">
            @include('admin.faq.add')
        </div>
    </div>

    <div class="offcanvas offcanfas-lg offcanvas-bottom" tabindex="-1" id="offCanvasEdit" aria-labelledby="offCanvasEditLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title header" id="offcanvasRightLabel">Edit FAQ</h5>
            <button type="submit" class="btn-close" data-bs-dismiss="offcanvas" aria-label="CLose"></button>
        </div>
        <div class="offcanvas-body">
            @include('admin.faq.edit')
        </div>
    </div>


    

@endsection