@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Proposal KP' => route('backend.intern-proposals.index'),
        'Index' => '#'
    ]) !!}
@endsection



@section('content')

    <div class="card">

        <div class="card-header">
        <div class="row">
        <div class="col-md-6">
            <strong>List Proposal KP</strong>
            
        </div>
        <div class="col-md-6" style="text-align:right">
        {{ html()->Form('POST', route('backend.intern-proposals.filter'))->acceptsFiles()->open() }}
            {{ html()->text('filter')->class(["form-control", "is-invalid" => $errors->has('filter')])->id('filter')->placeholder('Nama Instansi') }}
            @error('filter')
            <div class="invalid-feedback">{{ $errors->first('filter') }}</div>
            @enderror
        <input type="submit" value="Filter" class="btn btn-primary">
        </div>
        {{ html()->closeModelForm() }}
        </div>
        </div>
     

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Instansi</th>
                    <th>Periode</th>
                    <th>Pengusul</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse($internships as $internship)
                    <tr>
                        <td>{{ $internship->proposal->agency->name }}</td>
                        <td>
                            {{ $internship->proposal->start_at }}
                            <br>
                            s/d
                            <br>
                            {{ $internship->proposal->end_at }}
                        </td>
                        <td>
                            @foreach($internship->proposal->members as $member)
                                <div>
                                    {{ $member->student->name }} <br>
                                    <small>{{ $member->student->nim }}</small>
                                </div>
                            @endforeach
                        </td>
                        <td>
                            <h4>{!! $internship->proposal->status_text !!}</h4>
                        </td>
                        <td>
                            {!! cui()->btn_view(route('backend.intern-proposals.show', [$internship->proposal->id])) !!}   
                                                     
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada proposal</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>

@endsection
