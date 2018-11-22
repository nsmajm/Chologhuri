@extends('Layout.HomeLayout')


@section('title')
    User Login
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Login To Cholo Ghuri') }}</div>

                <div class="card-body">
                    @if (session()->has('message'))
                    <div class="alert alert-danger">

                            {{session()->get('message')}}

                    </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                           

                            <div class="col-md-8">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                           

                            <div class="col-md-8">
                                <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-success btn-login">
                                    {{ __('Login') }}
                                </button>
                                
                                
                                <a class="btn btn-success" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-md-center">
                        <div class=" col-8 mt-2">
                            <a href="{{route('facebook.login')}}" class="btn btn-success btn-facebook"><i class="fab fa-facebook-f"></i><span class="facebook">Continue With Facebook</span></a> <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
