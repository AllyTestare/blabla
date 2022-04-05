@extends('layouts.app')

@section('content')
<section>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10 col-md-0 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white">

                        <div class="card-body p-5 text-center">
                        <h3 class="fw-bold mb-3 text-uppercase">{{ __('Forgot your password?') }}</h3>
                        <p class="text-white-50 mb-2">{{ __('No problem - Just let us know your email address and we will email you a password reset link.') }}</p>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4 mt-3 text-success" :status="session('status')" />

                            <!-- Validation Errors -->
                            <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right" style="white-space: nowrap; margin-right: 5px;">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                            {{ __('Email Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</section>
@endsection