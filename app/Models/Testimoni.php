<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $table = 'testimoni';
    protected $fillable = ['id', 'nama', 'nilai', 'ulasan', 'created_at', 'updated_at'];
}
