@extends('layouts.app')

@section('content')
<h2 class="mb-4">📚 Daftar Buku (Admin)</h2>
<a href="{{ route('books.create') }}" class="btn btn-success mb-3">Tambah Buku</a>
<a href="{{ route('buku.index') }}" class="btn btn-success mb-3">Go to Perpustakaan Gobles</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>
                @if($book->gambar)
                    <img src="{{ asset('storage/' . $book->gambar) }}" width="60">
                @else
                    <span class="text-muted">Tidak ada</span>
                @endif
            </td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus buku ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
