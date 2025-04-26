@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-sm-10">
        <div class="card shadow border-0 rounded-4 overflow-hidden animate__animated animate__fadeIn">
            {{-- Header --}}
            <div class="card-header bg-white text-center py-4">
                <img src="{{ asset('dist/assets/img/hospital-icon.png') }}" alt="Hospital Icon" width="60" class="mb-3">
                <h4 class="text-primary fw-bold mb-1">Form Registrasi</h4>
                <p class="text-muted small mb-0">Silakan daftar untuk menggunakan layanan kami</p>
            </div>

            {{-- Form Body --}}
            <div class="card-body px-5 py-4 bg-light">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input id="name" type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mb-4">
                        <label for="password-confirm" class="form-label">Konfirmasi Kata Sandi</label>
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required>
                    </div>

                    {{-- Submit --}}
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary rounded-pill">
                            Daftar Sekarang
                        </button>
                    </div>
                </form>
            </div>

            {{-- Footer --}}
            <div class="card-footer bg-white text-center py-3">
                <small class="text-muted">Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-decoration-none text-primary fw-semibold">Login di sini</a>
                </small>
            </div>
        </div>
    </div>
</div>

{{-- Custom CSS --}}
@push('styles')
<style>
    body {
        background-color: #e9f4fb;
        font-family: 'Segoe UI', sans-serif;
    }

    .form-control {
        border-radius: 10px;
        font-size: 0.95rem;
        transition: 0.3s ease;
    }

    .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }

    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background-color: #2e59d9;
        border-color: #2653d4;
    }

    .card {
        border-radius: 16px;
    }

    .animate__animated.animate__fadeIn {
        animation-duration: 0.6s;
    }
</style>
@endpush
@endsection
