@extends('layouts.home')

@section('content')
<section class="tableListView-setting" data-aos="zoom-in" data-aos-delay="100">
    <form action="{{url('/master_jobs/'.$item->id)}}" method="post">
        @method('put')
        @csrf

        <div class="row">
            <div class="col-align-self-center">
                <h1 class="v-header">Edit Kategori Pekerjaan</h1>
               
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="name" class="subheader">Category</label>
                    <input type="text" name="name" id="name" value="{{old('name' , $item->name)}}" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="slug" class="subheader">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{old('slug' , $item->slug)}}" class="form-control @error('slug') is-invalid @enderror" readonly>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-12 pt-5">
                <div class="form-group">
                    <label for="status" class="subheader">Status</label>
                    <select name="status" class="form-select" id="status">
                        <option value="0" @if($item->status == 0) selected @endif>Inactive</option>
                        <option value="1" @if($item->status == 1) selected @endif>Active</option>
                    </select>
                </div>
            </div>

            <div class="col-12 pt-5">
                <button type="submit" class="btn col-12 btn-edit">Submit</button>
            </div>
        </div>
    </form>
</section>

<script>
        const title = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });
</script>
@endsection