<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $fillable = ['id', 'nama', 'nik', 'jabatan', 'foto', 'created_at', 'updated_at'];

    public function rewarding()
    {
        return $this->hasMany(Rewarding::class, 'pegawai_id');
    }
}
