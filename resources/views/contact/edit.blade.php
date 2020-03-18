@extends('admin.home')
@section('content')

    <h1>
        Edycja danych kontaktowych
    </h1>
    <p>
        <span class="card">{{ $contact['email'] }}</span>
        <span class="card">{{ $contact['fb'] }}</span>
        <span class="card">{{ $contact['insta'] }}</span>
    </p>
    
@endsection