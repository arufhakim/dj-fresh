<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $table = 'arsip';
    protected $fillable = ['id', 'bagian', 'kode', 'uraian', 'tahun', 'no_rak', 'no_ordner', 'no_label', 'lokasi', 'created_at', 'updated_at'];
}
