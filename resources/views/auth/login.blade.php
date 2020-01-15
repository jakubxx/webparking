@extends('layouts.full')

@section('site')

    <div class="login-content">

        <form class="login-form" method="POST" action="{{ route('login') }}" id="loginForm">
            @csrf

            <div>

                <img src="{{asset('img/logo.svg')}}" class="logo" alt="logo">
                <h3>WebParking</h3>

                @error('username')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror

                <div class="form-group">
                    <input id="username" type="text" class="form-control" name="username" required autocomplete="off" placeholder="Login" style="text-transform: none !important;">
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password" style="text-transform: none !important;">
                </div>

                <button class="btn login-btn" type="submit">{{ __('Zaloguj się') }}</button>

            </div>

        </form>

    </div>

@endsection
