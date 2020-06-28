@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Proposal KP' => route('backend.intern-proposals.index'),
        'Show' => '#'
    ]) !!}
@endsection



@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                            <strong><i class="cil-zoom"></i> Detail Proposal KP</strong>
                            <div class="col-sm" style="text-align:right">
                                <a href="{{route('backend.intern-acceptance.edit', [$internships->proposal->id])}}" class="btn btn-danger" style="margin:5px">Verifikasi Surat Balasan</a>
                                <a href="{{route('backend.intern-proposals.surattugas', [$internships->proposal->id])}}" class="btn btn-primary">Surat Tugas KP</a>
                                <a href="{{route('backend.intern-proposals.suratpermohonan', [$internships->proposal->id])}}" class="btn btn-info " style="margin:5px">Surat Permohonan KP</a>
                            </div>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('backends.klp06.proposals._detail')
                            @include('backends.klp06.proposals._list')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                        </div>

                    </div>
                </div>
                
            </div>

        </div>
    </div>
@endsection
