<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;

    protected $table = 'gambar';
    protected $fillable = ['id', 'nama', 'gambar', 'status', 'created_at', 'updated_at'];
}
