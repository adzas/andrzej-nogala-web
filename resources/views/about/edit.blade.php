@extends('admin.home')
@section('content')
    
    <div class="row text-center">
        <div class="col-md-8 m-4">
            <h1>
                O mnie - edycja notatki
            </h1>
        </div>
    </div>

    @if (count($errors) > 0)
        @component('alerts.success')
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endcomponent
    @endif

    @if (Session::has('result_for_updated_about'))
        @component('alerts.success')
            {{ Session::get('result_for_updated_about') }}
        @endcomponent
    @endif

    <div class="row">
        <div class="col-md-8">
            {!! Form::model($about, ['method' => 'PATCH', 'class' => 'form-horizontal', 'action' => ['AboutController@update', $about]]) !!}

                <div class="row form-group">
                    <div class="col-md-4 text-right p-1">
                        {!! Form::label('title', 'Tytuł') !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('title', null, ['class' => 'p-1']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 text-right p-1">
                        {!! Form::label('description', 'Treść artykułu') !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::textarea('description', null, ['class' => 'p-1']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        {!! Form::submit('Zaktualizuj dane', ['class' => 'btn-dark']) !!}
                    </div>
                </div>

            {!! Form::close() !!}
        </div>
    </div>
    
@endsection