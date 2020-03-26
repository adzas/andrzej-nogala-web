@extends('layouts.admin')
@section('content')

    <div class="row mt-4">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <img src="{{ $picture->getFileLink('../../') }}" alt="{{ $picture->alt }}" width=300 />
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-md-6 text-center">
                    <h1>{{ $picture->name }}</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p>{{ $picture->description }}</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <a class="btn btn-success" href="{{ action('PictureController@edit', $picture->id) }}">
                        Edytuj
                    </a>
                </div>
                <div class="col-md-3 text-center">
                    {!! Form::open(['action' => ['PictureController@destroy', $picture->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Usuń', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    
@endsection