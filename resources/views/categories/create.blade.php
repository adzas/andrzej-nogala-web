@extends('layouts.admin')
@section('content')

Dodaj nową kategorię
{!! Form::open(['method' => 'POST', 'action'=>'CategoryController@store', 'class' => 'form-horizontal']) !!}

{!! Form::hidden('order', 0) !!}
{!! Form::text('name') !!}
{!! Form::submit('Dodaj') !!}

{!! Form::close() !!}

@endsection
