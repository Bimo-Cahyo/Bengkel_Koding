@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@section('auth_body')
<div class="row justify-content-center my-5">
    <div class="col-md-10 col-lg-8"> {{-- Lebih lebar di md, dan pas di lg --}}
        <div class="card shadow p-4 rounded-4">

            {{-- Sambutan --}}
            <div class="text-center mb-4">
                <h3 class="mb-2">Daftar Akun Pasien</h3>
                <p class="text-muted">Isi data berikut untuk mendaftar</p>
            </div>

            {{-- Form --}}
            <form action="{{ route('register') }}" method="POST">
                @csrf

                {{-- Nama Lengkap --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        class="form-control @error('name') is-invalid @enderror" 
                        placeholder="Masukkan nama" 
                        value="{{ old('name') }}" 
                        required autofocus
                    >
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        placeholder="Masukkan email" 
                        value="{{ old('email') }}" 
                        required
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        class="form-control @error('password') is-invalid @enderror" 
                        placeholder="Masukkan password" 
                        required
                    >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Konfirmasi Password --}}
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        id="password_confirmation" 
                        class="form-control" 
                        placeholder="Ulangi password" 
                        required
                    >
                </div>

                {{-- Role --}}
                <div class="mb-4">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-control @error('role') is-invalid @enderror" required>
                        <option value="">-- Pilih Role --</option>
                        <option value="pasien" {{ old('role') == 'pasien' ? 'selected' : '' }}>Pasien</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tombol Daftar --}}
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-user-plus me-2"></i> Daftar
                    </button>
                </div>

                {{-- Link ke Login --}}
                <div class="mt-4 text-center">
                    <small class="text-muted">Sudah punya akun?</small> 
                    <a href="{{ route('login') }}" class="text-primary fw-bold">Login di sini</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
