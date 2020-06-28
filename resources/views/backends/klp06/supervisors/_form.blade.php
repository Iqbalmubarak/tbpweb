<div class="form-group">  
    <label class="form-label" for="id">Nama Mahasiswa</label>
    {{ html()->select('id')->options($lecturers)->class(["form-control", "is-invalid" => $errors->has('id')])->id('id')->placeholder('Pilih Pembimbing') }}
    @error('lecturers')
    <div class="invalid-feedback">{{ $errors->first('id') }}</div>
    @enderror
</div>


