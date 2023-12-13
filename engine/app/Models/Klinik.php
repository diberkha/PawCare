<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    use HasFactory;

    protected $table = 'klinik';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'alamat',
        'profile',
        'images',
        'rating',
        'harga_rata2',
        'patients',
    ];

    public function jamPraktik()
    {
        return $this->hasMany(JamPraktik::class, 'klinik_id');
    }
}
