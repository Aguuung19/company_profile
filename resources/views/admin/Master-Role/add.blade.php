<form action="{{url('/master_roles')}}" method="post">
    @csrf

    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label for="role" class="subheader">Role</label>
                <input type="text" name="role" id="role" value="{{old('role')}}" class="form-control @error('role') is-invalid @enderror" required>
                @error('role')
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
