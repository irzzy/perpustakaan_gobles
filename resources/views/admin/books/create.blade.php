@extends('layouts.app')

@section('content')
<h2 class="mb-4">📝 Tambah Buku</h2>

<form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data" class="card card-body shadow-sm">
    @csrf
    <div class="mb-3">
        <label>Judul</label>
        <input name="judul" class="form-control">
    </div>
    <div class="mb-3">
        <label>Penulis</label>
        <input name="penulis" class="form-control">
    </div>
    <div class="mb-3">
        <label>Penerbit</label>
        <input name="penerbit" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tahun</label>
        <input name="tahun" type="number" class="form-control">
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input name="stok" type="number" class="form-control">
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
