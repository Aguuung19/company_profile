<form action="{{url('footer_link/')}}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="title" class="subheader">Title</label>
        <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" required>
        @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror 
    </div>

    <div class="form-group mb-3">
        <label for="section" class="subheader">Section</label>
            <select name="section" class="form-select" id="" required>
                <option value="1">Section 1</option>
                <option value="2">Section 2</option>
            </select>
    </div>

    <div class="form-group mb-3">
        <label for="link" class="subheader">Link</label>
        <input type="text" name="link" id="" class="form-control @error('link') is-invalid @enderror" value="{{old('link')}}">
        @error('link')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group mb-5">
        <label for="target" class="subheader">Target</label>
            <select name="target" id="" class="form-select" required>
                <option value="_self">Same Tab</option>
                <option value="_blank">New Tab</option>
            </select>
    </div>


    <button class="btn btn-edit col-12" type="submit">Submit</button>
</form>