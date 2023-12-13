<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamPraktik extends Model
{
    use HasFactory;

    protected $table = 'jam_praktik';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_klinik',
        'mulai',
        'selesai',
    ];

    public function klinik()
    {
        return $this->belongsTo(Klinik::class, 'klinik_id');
    }
}
