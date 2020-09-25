@extends('layouts.master')

@section('content')
<div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                <div class="footer-top clearfix">
                    <div class="blue-form">
                        <h2>{{ __('Login') }}</h2>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-inline">
                            <h4>{{ __('E-Mail Address') }}</h4>
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-inline">
                        <h4>{{ __('Password') }}</h4>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-inline">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        </div>
                        </form>
                        
                     </div>
                    </form>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection
