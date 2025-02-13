<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'tel1',
        'tel2',
        
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
