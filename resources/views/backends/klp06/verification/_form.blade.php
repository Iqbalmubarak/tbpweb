
<div class="form-group">
    <div class='form-label'>Nama Instansi</div>
    <div>{{ $proposal->agency->name }}</div>
</div>

<div class="form-group">
    <div class='form-label'>Periode</div>
    <div>{{ $proposal->start_at }} s/d {{ $proposal->end_at }}</div>
</div>

<div class="form-group">
    <div class='form-label'>Nama Pengusul</div>
    @foreach($proposal->members as $member)
    <div>
        - {{ $member->student->name }} / {{ $member->student->nim }}
    </div>
    @endforeach
</div>

<div class="form-group">
    <div class='form-label'>Latar Belakang</div>
    <div>{{ $proposal->background }}</div>
</div>

<div class="form-group">
    <div class='form-label'>Rencana</div>
    <div>{{ $proposal->plan }}</div>
</div>

<div class="form-group">
  <div class="form-label">File Proposal</div>
  <div class="">
    <a href={{ asset('../storage/app/file_proposal/'. $proposal->file) }}>Download</a>
  </div>
</div>

<div class="form-group">
    <label class="form-label" for="status">Status Proposal</label>
    {{ html()->select('status')->options($statuses)->class(["form-control", "is-invalid" => $errors->has('status')])->id('status') }}
    @error('status')
    <div class="invalid-feedback">{{ $errors->first('status') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="name">Catatan</label>
    {{ html()->textarea('notes')->class(["form-control","is-invalid" => $errors->has('notes')])->id('notes') }}
    @error('notes')
    <div class="invalid-feedback">{{ $errors->first('notes') }}</div>
    @enderror
</div>
