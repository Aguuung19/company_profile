<form action="{{url('/faq')}}" method="post">
    @csrf

    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label for="question" class="subheader">Question</label>
                <textarea name="question" id="ckeditor0" class="ckeditor @error('question') is-invalid @enderror" value="{{old('question')}}">
                    {{old('question')}}
                </textarea>
                @error('question')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label for="answer" class="subheader">Answer</label>
                <textarea name="answer" id="ckeditor1" class="ckeditor @error('answer') is-invalid @enderror" value="{{old('answer')}}">
                    {{old('answer')}}
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
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
            </div>
        </div>

        <div class="col-12 pt-5">
            <button type="submit" class="btn col-12 btn-edit">Submit</button>
        </div>
    </div>

    

    
</form>