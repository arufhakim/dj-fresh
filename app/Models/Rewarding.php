<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rewarding extends Model
{
    use HasFactory;

    protected $table = 'rewarding';
    protected $fillable = ['id', 'pegawai_id', 'tanggal', 'kebersihan', 'kerapihan', 'tanggungjawab', 'score', 'created_at', 'updated_at'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
