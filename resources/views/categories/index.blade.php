@extends('layouts.admin')
@section('content')
    
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

<label>
    ilość zmian: <input type="number" id="counterChanges">
</label>

<div class="row">
    <div class="col-md-8">

        <ul id="sortable">
            <li class="sortable-item cancelselector">First</li>
        @foreach ($categories as $category)

            <li class="sortable-item ">{{ $category->name }}</li>

        @endforeach
        </ul>

    </div>
</div>

@endsection