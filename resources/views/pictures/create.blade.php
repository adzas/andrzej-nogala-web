@extends('layouts.admin')
@section('content')

<div class="row text-center">
    <div class="col-md-8 m-4">
        <h1>
            Dodaj zdjęcie
        </h1>
    </div>
</div>

@if (count($errors))
    @component('alerts.danger')
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endcomponent
@endif

<div class="row">
    <div class="col-md-8">
        {!! Form::open(['method' => 'POST', 'class' => 'form-horizontal', 'action' => ['PictureController@store'], 'files' => true] ) !!}
        
        <div class="row">
            <div class="col-md-4 text-right">
                {!! Form::label('Zdjęcie') !!}
            </div>
            <div class="col-md-6">
                {!! Form::file('file', ['accept' => '.jpeg,.jpg,.png']) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                {!! Form::label('Nazwa') !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('name', null) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                {!! Form::label('Krótki opis') !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('alt', null) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                {!! Form::label('Opis') !!}
            </div>
            <div class="col-md-6">
                {!! Form::textarea('description', null) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                {!! Form::submit('Dodaj zdjęcie') !!}
            </div>
        </div>
        
        {!! Form::close() !!}
    </div>
</div>

@endsection