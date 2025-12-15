@extends('themes.xylo.layouts.auth')

@section('content')
<div class="login-page min-vh-100 d-flex align-items-center justify-content-center mt-4">
    <div class="row w-100 g-0">

        {{-- Left Section: Dark Area --}}
        <div class="col-lg-6 d-flex flex-column justify-content-center text-white px-5 py-5"
             style="background-color: #0e0e0e;">
            
            {{-- Accent Symbol --}}
            <div class="mb-5 fs-1 fw-bold text-warning">*</div>

            {{-- Main Greeting --}}
            <div class="fw-bold display-4 mb-3 lh-sm">
                Welcome <br> POS-Theme 👋
            </div>

            {{-- Subheading --}}
            <div class="fs-2 fw-semibold mb-4 text-light">
                Login to Your Account
            </div>

            {{-- Supporting Text --}}
            <p class="text-light mb-5 opacity-75 fs-6">
                Access your account to manage orders, wishlist, and enjoy personalized shopping.
            </p>

            {{-- Footer --}}
            {{-- <div class="mt-auto text-center w-100 text-secondary small opacity-75 pt-4 border-top border-secondary">
                 {{ __('store.login.copyright') }}
            </div> --}}
        </div>

        {{-- Right Section: Login Form --}}
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white p-5">
            
            {{-- Logo --}}
            {{-- <div class="text-center mb-4">
                <img src="{{ asset('storage/brands/logo.jpg') }}" width="160" alt="Main Logo">
            </div> --}}

            {{-- Heading --}}
            <h2 class="fw-semibold mb-2 text-dark">Great to See You Again</h2>
            <p class="text-muted mb-4 text-center px-3">
                Please enter your login details to continue.
            </p>

            {{-- Login Form --}}
            <form class="w-100" method="POST" action="{{ route('customer.login') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="Email Address" class="form-control rounded-3 p-2">
                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password" class="form-control rounded-3 p-2">
                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <button type="submit" 
                        class="btn w-100 py-2 rounded-3 fw-semibold text-uppercase text-white border-0"
                        style="background-color: #0e0e0e; transition: all 0.3s ease;">
                    Login
                </button>
            </form>

            <p class="mt-4 mb-0 text-muted text-center">
                Don't have an account?
                <a href="{{ route('customer.register') }}" class="text-decoration-none fw-semibold">Create Account</a>
                <br>
                <a href="{{ route('customer.password.request') }}" class="text-decoration-none">Forgot Password?</a>
            </p>
        </div>
    </div>
</div>
@endsection
