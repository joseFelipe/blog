@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form class="form-signin" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        <label for="inputEmail">{{ __('Email') }}</label>
                        <div class="col-md-6">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Senha" required>
                        <label for="inputPassword">{{ __('Senha') }}</label>
                        <div class="col-md-6">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">{{ __('Remember Me') }}</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Login') }}</button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    <hr class="my-4">
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
