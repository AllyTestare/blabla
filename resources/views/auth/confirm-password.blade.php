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
                                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                            </h3>

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <!-- Password -->
                                <div class="form-group row">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                            {{ __('Confirm') }}
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