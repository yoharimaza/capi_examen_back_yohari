<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    use HasFactory;

    protected $fillable = [
        'domicilio', 'numero_exterior', 'colonia', 'cp', 'ciudad'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
