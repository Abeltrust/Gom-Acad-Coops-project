@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6 bg-default">
                <div class="reg-section-content-image">
                    <h2>GomAcad Coops</h2>
                    <h4>Gome state University Chapter</h4>
                </div>

            <div>
                <ul class="list">
                    <li class="list-item">
                        <div class="box-rounded-dot"></div>
                        Pay your  dues
                    </li>
                    <li class="list-item">
                        <div class="box-rounded-dot"></div>
                        Membership sign up
                    </li>
                    <li class="list-item">
                        <div class="box-rounded-dot"></div>
                        FAQs
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="col-md-6 py-3">
            <div class="card">
               
                 <div class="card-body">
                 <div class="card-header text-center"><h5>{{ __('Welcome Back, Login to continue...') }}</h5></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3  justify-content-center">
                          <div class="col-md-12">
                            <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3  justify-content-center">
                            <div class="col-md-12">
                                <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6  mt-1">
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 text-md-end">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-12 d-flex ">
                            Forgot password?
                            <a class=" mx-1" href="{{ route('register') }}">{{ __('Recover Here...') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
