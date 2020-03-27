@extends('layouts.admin')
@section('content')
    
<div class="row text-center">
    <div class="col-md-8 m-4">
        <h1>
            Kategorie obrazów
        </h1>
    </div>
</div>

<input type="text" class="datepicker">

<div class="row">
    <div class="col-md-8">

        <ul id="sortable">
        @foreach ($categories as $category)

            <li class="ui-state-default">{{ $category->name }}</li>

        @endforeach
        </ul>

    </div>
</div>

@endsection