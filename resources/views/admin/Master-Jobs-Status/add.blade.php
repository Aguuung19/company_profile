<form action="{{url('/master_jobs_status')}}" method="post">
    @csrf

    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label for="name" class="subheader">Status Pekerjaan</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label for="status" class="subheader">Status</label>
                <select name="status" class="form-select" id="status">
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

<script>
        const title = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });
</script>