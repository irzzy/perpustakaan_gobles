@extends('layouts.app')

@section('content')
<h2 class="mb-4">📝 Edit Buku</h2>

<form method="POST" action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data" class="card card-body shadow-sm">
    @csrf 
    @method('PUT')
    <div class="mb-3">
        <label>Judul</label>
        <input name="judul" class="form-control" value="{{ old('judul', $book->judul) }}">
    </div>
    <div class="mb-3">
        <label>Penulis</label>
        <input name="penulis" class="form-control" value="{{ old('penulis', $book->penulis) }}">
    </div>
    <div class="mb-3">
        <label>Penerbit</label>
        <input name="penerbit" class="form-control" value="{{ old('penerbit', $book->penerbit) }}">
    </div>
    <div class="mb-3">
        <label>Tahun</label>
        <input name="tahun" type="number" class="form-control" value="{{ old('tahun', $book->tahun) }}">
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input name="stok" type="number" class="form-control" value="{{ old('stok', $book->stok) }}>">
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control"> 
        
        @if(!empty($book->gambar))
        <img src="{{ asset('storage/' . $book->gambar) }}" width="100" class="mt-2">
    @endif
    
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
