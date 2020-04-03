@extends('admin.home')
@section('content')

<div class="row text-center">
    <div class="col-md-8 m-4">
        <h1>
            Galeria
        </h1>
    </div>
</div>

@if (Session::has('result_picture_remove'))
    @component('alerts.success')
        {{ Session::get('result_picture_remove') }}
    @endcomponent
@endif

<div class="row">
    <div class="col-md-12">
        <a href="{{ action('PictureController@create') }}" class="addPicture m-1 float-left" >
            +
        </a>

        <ul id="sortableHorizontal">
        @foreach ($pictures as $key => $picture)
            <li data-order="{{$key}}" data-id="{{ $picture->id }}" class="sortable-item-horizontal">
                <a
                    href="{{ action('PictureController@show', $picture->id) }}"
                    class='myPicture m-1 float-left'
                    id="pictureId{{ $picture->id }}" 
                    style="background-image: url('../storage/app/{{ $picture->file }}')"
                ></a>
            </li>
        @endforeach
        </ul>
    </div>
</div>

@endsection