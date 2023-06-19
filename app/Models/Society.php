<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
