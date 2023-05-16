<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perdagangan extends Model
{
    use HasFactory;

    protected $table = 'perdagangans';
    protected $primarykey = 'id';
    protected $fillable = [ 'no', 'nama_barang', 'harga', 'stok'];
}
