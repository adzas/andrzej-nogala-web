@extends('admin.home')
@section('content')

<div class="row text-center">
    <div class="col-md-8 m-4">
        <h1>
            Galeria
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <a href="{{ action('PictureController@create') }}" class="addPicture" >
            +
        </a>
    </div>
</div>
{{-- <div class="row">
    <div class="col-md-8">
        {!! Form::open('method' => 'PATCH', 'action' => ['GalleryController@update', $gallery]) !!}
    </div>
</div> --}}

@endsection