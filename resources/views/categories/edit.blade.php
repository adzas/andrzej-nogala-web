@extends('layouts.admin')
@section('content')

@if (Session::has('reault_category_update'))
    <div class="row m-4">
        <div class="col-md-8">
            @component('alerts.success')
            {{ Session::get('reault_category_update') }}
            @endcomponent
        </div>
    </div>
@endif

<div class="row m-4">
    <div class="col-md-8">
        <h1>Edycja wpisu kategorii</h1>
    </div>
</div>
<div class="row m-4">
    <div class="col-md-8">

        {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoryController@updateSwitch', $category->id], 'class' => 'form-horizontal']) !!}
        
        {!! Form::text('name') !!}
        {!! Form::submit('Aktualizuj', ['class' => 'btn btn-success', 'name' => 'switch']) !!}
        {!! Form::submit('Usuń', ['class' => 'btn btn-danger', 'name' => 'switch']) !!}
        
        {!! Form::close() !!}

        @endsection
    </div>
</div>