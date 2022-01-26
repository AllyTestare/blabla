@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-8">
                <div class="card-body p-4 text-center">
                    <div class="card bg-dark text-white" style="border-radius: 2rem;">

                        <div class="card-body p-5 text-center">
                            <h3 style="font-size:20px" class="text-center text-mute fw-bold mt-5 mb-0">
                                {{ __('Forgot your password? No problem - Just let us know your email address and we will email you a password reset link.') }}
                            </h3>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4 mt-3 text-success" :status="session('status')" />

                            <!-- Validation Errors -->
                            <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->

                                <div class="form-group row mt-3">
                                    <label for="email" class="col-sm-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
    </div>
</section>