<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangan';
    protected $fillable = ['id', 'pengguna', 'tanggal', 'waktu_mulai', 'waktu_selesai', 'ruangan', 'keterangan', 'status', 'created_at', 'updated_at'];
    protected $dates = ['tanggal'];
}
