@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'List Kp' => route('backend.intern-supervisors.index'),
        'Edit' => '#'
    ]) !!}
@endsection



@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">

                    {{ html()->modelForm($internship, 'PUT', route('backend.intern-supervisors.mass_update', $internship->id))->open() }}

                        
                        {{-- CARD HEADER--}}
                        <div class="card-header">
                            <strong><i class="cil-library-add"></i> Edit Pembimbing </strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                        @include('backends.supervisors._form')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"/>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
