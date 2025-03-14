@extends('notes.layout')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 400px;">
        <h2 class="text-center mb-4">Login</h2>

        @if(session('success'))
            <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
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

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <div class="text-center mt-3">
            <p>Don't have an account?</p>
            <a href="{{ route('register') }}" class="btn btn-outline-success btn-sm">Register</a>
        </div>
    </div>
</div>
@endsection
