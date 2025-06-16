<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // app/Models/Book.php
    protected $fillable = ['gambar','judul', 'penulis', 'penerbit', 'tahun', 'stok'];

}
