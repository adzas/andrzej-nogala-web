@extends('admin.home')
@section('content')

    <div class="row text-center">
        <div class="col-md-8 m-4">
            <h1>
                Edycja danych kontaktowych
            </h1>
        </div>
    </div>
    
    @if(Session::has('result_for_updated_contact'))

        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    {{ Session::get('result_for_updated_contact') }}
                </div>
            </div>
        </div>

    @endif

    @if (count($errors) > 0)
        <div class="row">
            <div class="col-md-10">
                <div class="alert alert-danger">
                    <ol>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-8">
            {!! Form::model($contact, ['method' => 'PATCH', 'class' => 'form-horizontal', 'action' => ['ContactController@show', $contact->id]]) !!}

                <div class="row form-group">
                    <div class="col-md-4 text-right p-2">
                        {!! Form::label('email', 'E-mail', ['class' => 'control-label']); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('email', null, ['class' => 'form-control']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-2">
                        {!! Form::label('fb', 'Facebook', ['class' => 'control-label']); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('fb', null, ['class' => 'form-control']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-2">
                        {!! Form::label('insta', 'Instagram', ['class' => 'control-label']); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('insta', null, ['class' => 'form-control']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-2">
                        {!! Form::label('twitter', 'Twitter', ['class' => 'control-label']); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('twitter', null, ['class' => 'form-control']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-2">
                        {!! Form::label('snapchat', 'Snapchat', ['class' => 'control-label']); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('snapchat', null, ['class' => 'form-control']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 text-right p-2">
                        {!! Form::label('youtube', 'YouTube', ['class' => 'control-label']); !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::text('youtube', null, ['class' => 'form-control']); !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Zaktualizuj', ['class' => 'btn btn-success']); !!}
                    </div>
                </div>

            {!! Form::close(); !!}
        </div>
    </div>
    
@endsection