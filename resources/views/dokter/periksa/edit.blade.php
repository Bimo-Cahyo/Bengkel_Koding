@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Periksa</div>

                <div class="card-body">
                    <form action="{{ route('periksa.update', $periksas->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input type="text" name="name_pasien" class="form-control" value="{{ $periksa->nama_pasien }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tanggal_periksa">Tanggal Periksa</label>
                            <input type="date" name="tanggal_periksa" class="form-control" value="{{ $periksa->tanggal_periksa }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="keluhan">Keluhan</label>
                            <textarea name="keluhan" class="form-control" rows="3" required>{{ $periksa->keluhan }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="diagnosa">Diagnosa</label>
                            <textarea name="diagnosa" class="form-control" rows="3" required>{{ $periksa->diagnosa }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="resep_obat">Resep Obat</label>
                            <textarea name="resep_obat" class="form-control" rows="2" required>{{ $periksa->resep_obat }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-warning">Update</button>
                        <a href="{{ route('periksa.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection