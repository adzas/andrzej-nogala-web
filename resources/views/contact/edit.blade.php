@extends('admin.home')
@section('content')

    <div class="row text-center">
        <div class="col-md-8 m-4">
            <h1>
                Edycja danych kontaktowych
            </h1>
        </div>
    </div>
    
    @if (count($errors) > 0)
        @component('alerts.danger')
            <ol>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        @endcomponent
    @endif
    
    @if (Session::has('result_for_updated_contact'))
        @component('alerts.success')
            {{ Session::get('result_for_updated_contact') }}
        @endcomponent
    @endif
    
    <div class="row">
        <div class="col-md-8">
            {!! Form::model($contact, ['method' => 'PATCH', 'class' => 'form-horizontal', 'action' => ['ContactController@show', $contact->id]]) !!}

                <div class="row form-group">
                    <div class="col-md-4 text-right p-1">
                        {!! Form::label('email', 'E-mail'); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('email', null, ['class' => 'p-1']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-1">
                        {!! Form::label('fb', 'Facebook'); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('fb', null, ['class' => 'p-1']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-1">
                        {!! Form::label('insta', 'Instagram'); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('insta', null, ['class' => 'p-1']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-1">
                        {!! Form::label('twitter', 'Twitter'); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('twitter', null, ['class' => 'p-1']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-1">
                        {!! Form::label('snapchat', 'Snapchat'); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('snapchat', null, ['class' => 'p-1']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-1">
                        {!! Form::label('youtube', 'YouTube'); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('youtube', null, ['class' => 'p-1']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Zaktualizuj', ['class' => 'btn-dark']); !!}
                    </div>
                </div>

            {!! Form::close(); !!}
        </div>
    </div>
    
@endsection