@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Proposal KP' => route('backend.intern-proposals.index'),
        'Verification' => '#'
    ]) !!}
@endsection


@section('content')

    <div class="card">
        
        <div class="card-header">
            <strong>Form Verifikasi Surat Balasan</strong>
        </div>
        <div class="card-body">
        <div class="form-group">
        <div class="form-group">
        <form action="{{route('backend.intern-acceptance.update', $proposal->id)}}" method="post" enctype="multipart/form-data">
        @method('patch')
        {{csrf_field()}}
            <label for="status">Verifikasi Surat :</label> <br>
            <div class="form-check form-check-inline">
            <label for="status">
                <input type="radio" name="status" value=2 id="status" @if($proposal->status == 2) checked @endif>Diterima
                <input type="radio" name="status" value=3 id="status" @if($proposal->status == 3) checked @endif>Ditinjau
                <input type="radio" name="status" value=4 id="status" @if($proposal->status == 4) checked @endif>Ditolak
            </label>
            </div> 
            <div class="form-label">Upload File :</div>
                <input type="file" id="file" name="file" value="{{ $proposal->file }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Notes</label>
                <textarea name="notes" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $proposal->notes }}</textarea>
            </div>
            <div class="button">
                <input type="submit" value="OK" class="btn btn-primary"/>
            </div>
        </form>
        </div>
        </div>        
        </div>

      

    </div>

@endsection
