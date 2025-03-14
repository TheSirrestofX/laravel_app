@extends('notes.layout')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 400px;">
        <h2 class="text-center mb-4">Register</h2>

        @if(session('success'))
            <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Enter your name">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Re-enter your password">
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <div class="text-center mt-3">
            <p>Already have an account?</p>
            <a href="{{ route('login') }}" class="btn btn-outline-success btn-sm">Login</a>
        </div>
    </div>
</div>
@endsection
