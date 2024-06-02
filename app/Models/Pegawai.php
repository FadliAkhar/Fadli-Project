<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pegawais';
    protected $fillabel = [
        'nama_pegawais','nis','alamat'
    ];
}
