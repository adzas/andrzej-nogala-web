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
        <a href="{{ action('PictureController@create') }}" class="addPicture m-1 float-left" >
            +
        </a>

        @foreach ($pictures as $picture)
            <a
                href="{{ action('PictureController@show', $picture->id) }}"
                class='myPicture m-1 float-left'
                id="pictureId{{ $picture->id }}" 
                style="background-image: url('../storage/app/{{ $picture->file }}')"
            ></a>
        @endforeach
    </div>
</div>

@endsection