<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    public function user()
    {
        $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'category',
        'name',
        'age',
        'specialNeeds',
        'complaint',
    ];
}
