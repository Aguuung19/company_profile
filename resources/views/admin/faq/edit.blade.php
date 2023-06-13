@extends('layouts.home')

@section('content')
<section class="tableListView-setting" data-aos="zoom-in" data-aos-delay="100">
    <form action="{{url('/faq/'.$item->id)}}" method="post">
        @method('put')
        @csrf

        <div class="row">
            <div class="col-align-self-center">
                <h1 class="v-header">Edit FAQ</h1>
               
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="form-group">
                    <label for="question" class="subheader">Question</label>
                    <textarea name="question" id="ckeditor0" class="ckeditor @error('question') is-invalid @enderror" value="{{old('question' , $item->question)}}">
                        {{old('question' , $item->question)}}
                    </textarea>
                    @error('question')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-12 pt-5">
                <div class="form-group">
                    <label for="answer" class="subheader">Answer</label>
                    <textarea name="answer" id="ckeditor1" class="ckeditor @error('answer') is-invalid @enderror" value="{{old('answer' , $item->answer)}}">
                        {{old('answer' , $item->answer)}}
                    </textarea>
                    @error('answer')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-12 pt-5">
                <div class="form-group">
                    <label for="status" class="subheader">Status</label>
                    <select name="status" class="form-select" id="">
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
@endsection