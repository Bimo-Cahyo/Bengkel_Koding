@extends('layouts.app')

{{-- Customize layout sections --}}
<<<<<<< HEAD
@section('subtitle', 'Obat')
@section('content_header_title', 'Daftar Obat')

@section('content_body')
<div class="card">
    <div class="card-header">
        <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah Obat</a>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nama Obat</th>
                    <th>Kemasan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($obat as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name_obat }}</td>
                        <td>{{ $item->kemasan }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('obat.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('obat.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
=======
@section('subtitle', 'Daftar Obat')
@section('content_header_title', 'Obat')
@section('content_header_subtitle', 'Tambah dan Lihat Daftar Obat')

@section('content_body')
<div class="card">
    <div class="card-header">Daftar Obat</div>
    <div class="card-body">
        {{-- Form Input Obat --}}
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name_obat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="name_obat" name="name_obat" required>
            </div>

            <div class="mb-3">
                <label for="kemasan" class="form-label">Kemasan</label>
                <input type="text" class="form-control" id="kemasan" name="kemasan" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Obat</button>
        </form>

        <hr>

        {{-- Tabel Daftar Obat --}}
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Kemasan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Tanggal Diperbarui</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Data obat yang disimulasikan (static data) --}}
                <tr>
                    <th scope="row">1</th>
                    <td>Paracetamol</td>
                    <td>Box</td>
                    <td>5000</td>
                    <td>2025-04-01 10:00:00</td>
                    <td>2025-04-01 10:00:00</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Amoxicillin</td>
                    <td>Strip</td>
                    <td>30000</td>
                    <td>2025-04-02 12:00:00</td>
                    <td>2025-04-02 12:00:00</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Ibuprofen</td>
                    <td>Botol</td>
                    <td>20000</td>
                    <td>2025-04-03 08:00:00</td>
                    <td>2025-04-03 08:00:00</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
            </tbody>
        </table>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
