@extends('layouts.app')

@section('content')
<h2 class="mb-4">📖 Perpustakaan Gobles</h2>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($books as $book)
    <div class="col">
        <div class="card h-100 shadow-sm">
            @if($book->gambar)
                <img src="{{ asset('storage/' . $book->gambar) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $book->judul }}</h5>
                <p class="card-text">
                    Penulis: {{ $book->penulis }}<br>
                    Penerbit: {{ $book->penerbit }}<br>
                    Tahun: {{ $book->tahun }}<br>
                    <span class="badge bg-secondary">Stok: {{ $book->stok }}</span>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
