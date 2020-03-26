@extends('layouts.admin')
@section('content')

    <div class="row mt-4">
        <div class="col-md-8">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    @component('alerts.danger')
                        {{ $error }}
                    @endcomponent
                @endforeach
            @endif
            
            @if (Session::has('result_edit_picture'))
                @component('alerts.success')
                    {{ Session::get('result_edit_picture') }}
               @endcomponent
            @endif
        </div>
    </div>
        
    <div class="row mt-4">

        <div class="col-4 pb-4">
            <div class="pictureBox">
                <img src="{{ $picture->getFileLink('../../../') }}" alt="{{ $picture->alt }}" width="300" />
            </div>
        </div>
        <div class="col-sm-8">
            
            {!! Form::model($picture, ['method' => 'PATCH', 'class' => 'form-horizontal', 'action' => ['PictureController@update', $picture->id], 'files' => true]) !!}
        
                @include('pictures.form', ['buttonText' => 'Edytuj wpis'])
        
            {!! Form::close() !!}

        </div>
    </div>

@endsection