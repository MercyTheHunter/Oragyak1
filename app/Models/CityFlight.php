<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityFlight extends Model
{
    use HasFactory;

    public function cities()
    {
        return $this->belongstoMany(City::class);
    }

    public function flights()
    {
        return $this->belongstoMany(Flight::class);
    }
}
