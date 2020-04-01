@extends('layouts.admin')

@section('content')


<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row text-center m-5">
        <div class="col-md-10">
            <h1>Logowanie</h1>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-4 text-right">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adres e-Mail') }}</label>
        </div>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-4 text-right">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Hasło') }}</label>
        </div>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Zapamiętaj mnie') }}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Zaloguj') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Zapomniałeś hasła?') }}
                </a>
            @endif
        </div>
    </div>
</form>
@endsection
