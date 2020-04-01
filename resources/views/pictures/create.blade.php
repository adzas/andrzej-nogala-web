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
        
            @include('pictures.form', ['buttonText' => 'Dodaj zdjęcie'])
        
        {!! Form::close() !!}
    </div>
</div>

@endsection