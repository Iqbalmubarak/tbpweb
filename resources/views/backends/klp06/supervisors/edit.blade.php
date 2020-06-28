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
                <div class="col-md-12">
                    <div class="card">

                    {{ html()->modelForm($internship, 'PUT', route('backend.intern-supervisors.mass_update', $internship->id))->open() }}
                    
                        {{-- CARD HEADER--}}
                        <div class="card-header">
                            <strong><i class="cil-library-add"></i> Kelola Pembimbing </strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                        @include('backends.klp06.supervisors._form')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"/>
                        </div>

                    {{ html()->form()->close() }}
        
                </div>
                    
                </div>

            </div>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

           
                    {{-- CARD HEADER--}}
                    <div class="card-header">
                        <strong><i class="cil-zoom"></i> Daftar Mahasiswa Pada KP {{ $internship->proposal->agency->name }}</strong>
                    </div>
                    {{-- CARD BODY--}}
     

        
                </div>
                    
                </div>

            </div>

        </div>
    </div>
@endsection
