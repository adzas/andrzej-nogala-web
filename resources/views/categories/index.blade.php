@extends('layouts.admin')
@section('content')

<div class="row mt-2">
    <div class="col-md-12">
        @if (Session::has('result_order_category_update'))
            @component('alerts.success')
                {{ Session::get('result_order_category_update') }}
            @endcomponent
        @endif
    </div>
</div>

<div class="row text-center">
    <div class="col-md-8 m-4">
        <h1>
            Kategorie obrazów
        </h1>
        <p>
            Ustaw kolejność wyświetlania.
        </p>
    </div>
</div>

{!! Form::open(['method' => 'PATCH', 'action' => ['CategoryController@orderUpdate'], 'class' => 'form-horizontal']) !!}

<div class="row">
    <div class="col-md-8">

        <ul id="sortable">
        @foreach ($categories as $category)

            <li class="sortable-item ">
                <a href="{{ action('CategoryController@edit', $category->id) }}">
                    <input type="hidden" name="category[]" value="{{ $category->id }}">
                    <span class="categoryName">{{ $category->name }}</span>
                    <span class="editText">Edytuj</span>
                </a>
            </li>
                
        @endforeach
        </ul>

    </div>
</div>
<div class="row">
    <div class="col-md-8 text-center">
        {!! Form::submit('Aktualizuj kolejność', ['class' => 'btn btn-primary']) !!}
        <a href="{{ action('CategoryController@create') }}" class="btn btn-success">Dodaj nową kategorię</a>
    </div>
</div>

{!! Form::close() !!}

@endsection