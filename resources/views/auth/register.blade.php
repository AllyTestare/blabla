@extends('layouts.app')

@section('content')
<section id="hero-area-register">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10 col-md-0 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white">

                        <div class="card-body p-5 text-center">
                            <h3 class="fw-bold mb-3 text-uppercase">{{ __('Create an account') }}</h3>
                            <p class="text-white-50 mb-5">We’ll send a magic link to your inbox to confirm your email address and sign you in.</p>
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right" style="white-space: nowrap; margin-right: 5px;">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right" style="white-space: nowrap; margin-right: 5px;">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right" style="white-space: nowrap; margin-right: 5px;">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="white-space: nowrap; margin-right: 5px;">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required />
                                            <label class="form-check-label" for="form2Example3g">
                                                I agree all statements in <a href="#!" style="text-decoration:none" class="btn-link">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4 mt-3">
                                                <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login" style="text-decoration:none" class="text-20 fw-bold">Login here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection