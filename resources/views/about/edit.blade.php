@extends('admin.home')
@section('content')
    
    <h1>{{ $about->title }}</h1>
    <p>{{ $about->description }}</p>
    
@endsection