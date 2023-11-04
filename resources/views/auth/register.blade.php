@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="row justify-content-center">
        <div class="col-md-6 justify-content-center">
            <div class="card">
                <div class="card-body">
                   <div class=" text-center mt-3 "><h3>{{ __('Register') }}</h3></div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                               <label for="name" class="col-md-6 col-form-label text-md-start">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="email" class="col-md-6 col-form-label text-md-start">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                               <label for="password" class="col-md-6 col-form-label text-md-start">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="password-confirm" class="col-md-6 col-form-label text-md-start">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary mt-2 w-100">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="col-md-12 d-flex mt-3">
                               <div class="mt-1">
                                 Already have an account?
                               </div>
                                <a class="nav-link py-1" href="{{ route('login') }}">{{ __('Click here to login...') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
