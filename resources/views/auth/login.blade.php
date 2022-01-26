@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10 col-md-0 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 2rem;">


                    <div class="card-body p-5 text-center">
                        <h2 class="fw-bold mb-1 text-uppercase">{{ __('Login') }}</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>


                                    @endif
                                </div>
                                <div class="col-md-9">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password ?') }}</a>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                        {{ __('Login') }}
                                    </button>
                                    <div class="d-flex justify-content-center mt-4 pt-0">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-2 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>

                                </div>
                            </div>

                            <div>
                                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="/register" class="text-20 fw-bold">Sign Up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection