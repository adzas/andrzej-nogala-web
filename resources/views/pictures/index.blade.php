@extends('admin.home')
@section('content')
    
    <h1>Zdjęcia</h1>
    @foreach ($pictures as $picture)
        <div class="card">
            <label for="image{{ $picture['id'] }}"> 
                {{ $picture['name'] }}
                <img src="{{ $picture['file_name'] }}" alt="{{ $picture['alt'] }}" width="300">
                <p>
                    {{ $picture['description'] }}
                </p>
            </label>
        </div>
    @endforeach

@endsection