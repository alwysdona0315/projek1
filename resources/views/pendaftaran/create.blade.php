<!-- resources/views/pendaftaran/create.blade.php -->
@extends('layouts.app') <!-- Pastikan Anda memiliki layout yang memuat Bootstrap 5.3.2 -->

@section('content')
<div class="container">
    <form action="{{ route('pendaftaran.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" name="nim" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan:</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas:</label>
            <input type="text" name="fakultas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="total_sks" class="form-label">Total SKS:</label>
            <input type="number" name="total_sks" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ipk" class="form-label">IPK:</label>
            <input type="text" name="ipk" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
