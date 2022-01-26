@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-8">
                <div class="card-body p-4 text-center">
                    <div class="card bg-dark text-white" style="border-radius: 2rem;">

                        <div class="card-body p-5 text-center">

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

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

                                <!-- Password -->
                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>


                                        @endif
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group row">

                                    <label for="password_confirmation" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">

                                        <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                            {{ __('Reset Password') }}
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