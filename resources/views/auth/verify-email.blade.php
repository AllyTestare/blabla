@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-8">
                <div class="card-body p-4 text-center">
                    <div class="card bg-dark text-white" style="border-radius: 2rem;">

                        <div class="card-body p-5 text-center">
                            <h4 style="font-size:25px" class="text-center text-mute fw-bold mt-5 mb-0">
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}
                            </h4>

                            @if (session('status') == 'verification-link-sent')
                            <p class="text-center text-muted mt-5 mb-0">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </p>
                            @endif

                            <div class="mt-4 flex items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <p class="text-center text-mute fw-bold mt-5 mb-0"><i>If you didn\'t receive the email, click on "Resend Verification Email".</i>

                                    </p>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                                {{ __('Resend Verification Email') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                                {{ __('Log Out') }}
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
    </div>


</section>
@endsection