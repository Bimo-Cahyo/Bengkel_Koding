@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-5 col-sm-10">
        <div class="card shadow border-0 rounded-4" style="max-height: 90vh; overflow-y: auto;">
            {{-- Body Form --}}
            <div class="card-body px-4 py-4 bg-light">
                <div class="text-center mb-4">
                    <img src="{{ asset('dist/assets/img/hospital-icon.png') }}" alt="Hospital Icon" width="55" class="mb-3">
                    <h5 class="fw-bold text-primary mb-1">Login Rumah Sakit</h5>
                    <p class="text-muted small">Masuk untuk mengakses layanan</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Remember Me --}}
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Ingat Saya
                        </label>
                    </div>

                    {{-- Submit --}}
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary rounded-pill">
                            Masuk
                        </button>
                    </div>

                    {{-- Lupa Password --}}
                    @if (Route::has('password.request'))
                        <div class="text-center mt-3">
                            <a class="small text-decoration-none text-secondary" href="{{ route('password.request') }}">
                                Lupa password?
                            </a>
                        </div>
                    @endif
                </form>
            </div>

            {{-- Footer --}}
            <div class="card-footer text-center bg-white py-2">
                <small class="text-muted">&copy; {{ date('Y') }} Rumah Sakit Sehat Selalu</small>
            </div>
        </div>
    </div>
</div>

{{-- Custom CSS --}}
@push('styles')
<style>
    body {
        background-color: #eaf4fc;
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
    }

    .btn-primary:hover {
        background-color: #2e59d9;
        border-color: #2653d4;
    }

    .card {
        border-radius: 16px;
    }
</style>
@endpush
@endsection
