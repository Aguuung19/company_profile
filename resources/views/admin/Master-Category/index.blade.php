@extends('layouts.home')

@section('content')
    <section class="tableListView-setting" data-aos="zoom-in" data-aos-delay="100">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        
        <div class="row">
            <div class="col-align-self-center">
                <h1 class="v-header">Master Category</h1>
                <a href="#" class="btn btn-v-edit mt-3" data-bs-toggle="offcanvas" data-bs-target="#offCanvasAdd" aria-label="Tambah Master Category">
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
                                <th>Category</th>
                                <th>Slug</th>
                                <th>Menu</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $item)
                                <tr>
                                    <td><b>{{$loop->iteration}}</b></td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>{{$item->master_menu->name}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>
                                        <a href="{{url('master_category/'.$item->id.'/edit')}}" class="badge text-bg-primary" aria-label="Edit Master Category">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{url('master_category/'.$item->id)}}" method="POST">
                                            @method('delete')
                                            @csrf

                                            <button class="badge text-bg-danger border-0" type="submit" onclick="return confirm('Delete Menu?')" aria-label="Delete Master Category">
                                                <i class="bi bi-trash"></i>
                                            </button>
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
            <h5 class="offcanvas-title header" id="offcanvasRightLabel">Add Master Category</h5>
            <button type="submit" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @include('admin.Master-Category.add')
        </div>
    </div>
@endsection
