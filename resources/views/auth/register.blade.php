@extends('layouts.master')

@section('content')
<div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                <div class="footer-top clearfix">
                    <div class="blue-form">
                        <h2>{{ __('Register') }}</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-inline">
                                <h4>{{ __('Name') }}</h4>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-inline">
                                <h4>{{ __('E-Mail Address') }}</h4>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <h4>{{ __('Confirm Password') }}</h4>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>
                            <div class="form-inline">
                                <button type="submit" class="btn btn-primary">  {{ __('Register') }}</button>
                            </div>
                        </form>
                        
                     </div>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection
