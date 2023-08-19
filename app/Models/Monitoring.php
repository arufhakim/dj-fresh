<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    protected $table = 'monitoring';
    protected $fillable = ['id', 'area', 'pic', 'auditor', 'kondisi', 'tanggal', 'keterangan', 'created_at', 'updated_at'];
    protected $dates = ['tanggal'];
}
