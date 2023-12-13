<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_klinik',
        'kategori',
        'complaint',
        'tanggal_jadwal',
        'jadwal',
        'status',
        'waktu_pembuatan',
        'tanggal_pembuatan',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
