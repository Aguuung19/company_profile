<form action="{{url('profile/'.$item->id)}}" method="post">
    @method('put')
    @csrf

    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label for="title" class="subheader">Section Title</label>
                <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror" value="{{old('title' , $item->title)}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label for="organization_structure_title" class="subheader">Struktor Organisasi</label>
                <input type="text" name="organization_structure_title" id="" class="form-control @error('organization_structure_title') is-invalid @enderror" value="{{old('organization_structure_title' , $item->organization_structure_title)}}">
                @error('organization_structure_title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

        <div class="col-lg-6 col-12 pt-5">
            <div class="form-group">
                <label for="vision" class="subheader">Visi</label>
                <textarea name="vision" id="ckeditor0" class="ckeditor @error('vision') is-invalid @enderror" value="{{old('vision' , $item->vision)}}">{{$item->vision}}</textarea>
                @error('vision')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

        <div class="col-lg-6 col-12 pt-5">
            <div class="form-group">
                <label for="mission" class="subheader">Misi</label>
                <textarea name="mission" id="ckeditor1" class="ckeditor @error('mission') is-invalid @enderror" value="{{old('mission' , $item->mission)}}">{{$item->mission}}</textarea>
                    @error('mission')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>
        </div>

        <div class="col-lg-6 col-12 pt-5">
            <div class="form-group">
                <label for="vision_image" class="subheader">Cover Visi</label>
                <input type="file" name="vision_image" id="" class="form-control @error('vision_image') is-invalid @enderror" value="{{old('vision_image' , $item->vision_image)}}">
                    @error('vision_image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>
        </div>
        <div class="col-lg-6 col-12 pt-5">
            <div class="form-group">
                <label for="mission_image" class="subheader">Cover Misi</label>
                <input type="file" name="mission_image" id="" class="form-control @error('mission_image') is-invalid @enderror" value="{{old('mission_image' , $item->mission_image)}}">
                    @error('mission_image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>
        </div>

        <div class="col-lg-6 col-12 pt-5">
            <div class="form-group">
                <label for="organization_structure_image" class="subheader">Cover Struktur Organisasi</label>
                <input type="file" name="organization_structure_image" id="" class="form-control @error('organization_structure_image') is-invalid @enderror" value="{{old('organization_structure_image' , $item->organization_structure_image)}}">
                    @error('organization_structure_image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>
        </div>

        <div class="col-lg-6 col-12 pt-5">
            <div class="form-group">
                <label for="teams_banner" class="subheader">Teams Banner</label>
                <input type="file" name="teams_banner" id="" class="form-control @error('teams_banner') is-invalid @enderror" value="{{old('teams_banner' , $item->teams_banner)}}">
                    @error('teams_banner')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>
        </div>

        <div class="col-12 py-5">
            <button type="submit" class="btn btn-edit col-12">Edit</button>
        </div>

    </div>
</form>
