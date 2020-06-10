
<!-- Text Field Input for Nama Pembimbing -->
<div class="form-group">
    <label class="form-label" for="field_advisor_name">Nama Pembimbing</label>
    {{ html()->text('field_advisor_name')->class(["form-control", "is-invalid" => $errors->has('field_advisor_name')])->id('field_advisor_name')->placeholder('Nama Pembimbing') }}
    @error('field_advisor_name')
    <div class="invalid-feedback">{{ $errors->first('field_advisor_name') }}</div>
    @enderror
</div>


<!-- Text Field Input for NO/ID Pembimbing -->
<div class="form-group">
    <label class="form-label" for="field_advisor_no">NO/ID Pembimbing</label>
    {{ html()->text('field_advisor_no')->class(["form-control", "is-invalid" => $errors->has('field_advisor_no')])->id('field_advisor_no')->placeholder('NO/ID Pembimbing') }}
    @error('field_advisor_no')
    <div class="invalid-feedback">{{ $errors->first('field_advisor_no') }}</div>
    @enderror
</div>

<!-- Text Field Input for No HP Pembimbing -->
<div class="form-group">
    <label class="form-label" for="field_advisor_phone">Nomor HP Pembimbing</label>
    {{ html()->text('field_advisor_phone')->class(["form-control", "is-invalid" => $errors->has('field_advisor_phone')])->id('field_advisor_phone')->placeholder('Nomor HP Pembimbing') }}
    @error('field_advisor_phone')
    <div class="invalid-feedback">{{ $errors->first('field_advisor_phone') }}</div>
    @enderror
</div>

<!-- Text Field Input for E-mail Pembimbing -->
<div class="form-group">
    <label class="form-label" for="field_advisor_email">E-mail Pembimbing</label>
    {{ html()->text('field_advisor_email')->class(["form-control", "is-invalid" => $errors->has('field_advisor_email')])->id('field_advisor_email')->placeholder('E-mail Pembimbing') }}
    @error('field_advisor_email')
    <div class="invalid-feedback">{{ $errors->first('field_advisor_email') }}</div>
    @enderror
</div>
