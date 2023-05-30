<form action="{{url('landing_page/'.$item->id)}}" method="post">
    @method('put')
    @csrf

    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="mb-3">
                <label for="logo" class="subheader">Logo :</label>
                <input type="file" name="logo" id="" class="form-control @error('logo') is-invalid @enderror" value="{{old('logo' , $item->logo)}}" >
                @error('logo')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror 
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="mb-3">
                <label for="logo_footer" class="subheader">Logo Footer :</label>
                <input type="file" name="logo_footer" id="" class="form-control @error('logo_footer') is-invalid @enderror" value="{{old('logo_footer' , $item->logo_footer)}}" >
                @error('logo_footer')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror 
            </div>
        </div>
    </div>

    <hr>
    

    <div class="row">
        <div class="col-lg-6 col-12 align-self-center">
            <div class="mb-3">
                <label for="hero_title" class="subheader">Hero Title</label>
                <input type="text" name="hero_title" id="" class="form-control @error('hero_title') is-invalid @enderror" value="{{old('hero_title' , $item->hero_title)}}" required>
                @error('hero_title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror 
            </div>

            <div class="mb-3">
                <label for="hero_desc" class="subheader">Hero Description</label>
                <input type="text" name="hero_desc" id="" class="form-control @error('hero_desc') is-invalid @enderror" value="{{old('hero_desc' , $item->hero_desc)}}" required>
                @error('hero_desc')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror 
            </div>

            <div class="mb-3">
                <label for="hero_btn" class="subheader">Hero Button</label>
                <input type="text" name="hero_btn" id="" class="form-control @error('hero_btn') is-invalid @enderror" value="{{old('hero_btn' , $item->hero_btn)}}" required>
                @error('hero_btn')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror 
            </div>

            <div class="mb-3">
                <label for="hero_btn_link" class="subheader">Hero Button Link</label>
                <input type="text" name="hero_btn_link" id="" class="form-control @error('hero_btn_link') is-invalid @enderror" value="{{old('hero_btn_link' , $item->hero_btn_link)}}" required>
                @error('hero_btn_link')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror 
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="mb-3">
                <label for="hero_banner" class="subheader">hero_banner :</label>
                <input type="file" name="hero_banner" id="" class="form-control @error('hero_banner') is-invalid @enderror" value="{{old('hero_banner' , $item->hero_banner)}}" >
                @error('hero_banner')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror 
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="section2_title" class="subheader">Section 2 Title</label>
        <input type="text" name="section2_title" id="" class="form-control @error('section2_title') is-invalid @enderror" value="{{old('section2_title' , $item->section2_title)}}" required>
        @error('section2_title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror 
    </div>

    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="mb-3">
                <label for="footer_title1" class="subheader">Section 1 Footer Title</label>
                <input type="text" name="footer_title1" id="" class="form-control @error('footer_title1') is-invalid @enderror" value="{{old('footer_title1' , $item->footer_title1)}}" required>
                @error('footer_title1')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror 
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="mb-3">
                <label for="footer_title2" class="subheader">Section 2 Footer Title</label>
                <input type="text" name="footer_title2" id="" class="form-control @error('footer_title2') is-invalid @enderror" value="{{old('footer_title2' , $item->footer_title2)}}" required>
                @error('footer_title2')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror 
            </div>  
        </div>
    </div>

    <button class="btn btn-edit col-12" type="submit">Update</button>
</form>