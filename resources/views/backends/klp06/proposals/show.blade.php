@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Proposal KP' => route('frontend.myintern-proposals.index'),
        'Index' => '#'
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
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('backends.klp06.proposals._detail')
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
