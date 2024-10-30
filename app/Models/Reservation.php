<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
    public function chambres()
    {
        return $this->belongsTo(Chambre::class);
    }

    public function facture()
    {
        return $this->hasMany(Facture::class);
    }
}
