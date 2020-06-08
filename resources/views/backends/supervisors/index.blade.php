@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'List KP' => route('frontend.myintern-proposals.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('content')

    <div class="card">

        <div class="card-header">
            <strong>List KP</strong>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Instansi KP</th>
                    <th>Periode</th>
                    <th>Pembimbing</th>
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
                        {{ $internship->field_advisor_name }}
                        </td>
                        <td>
                             {!! cui()->btn_edit(route('backend.intern-supervisors.mass_edit', [$internship->id])) !!}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak Ada Data</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>

@endsection
