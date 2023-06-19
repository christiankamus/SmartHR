<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'relationship',
        'name',
        'lastname',
        'firstname',
        'city_id',
        'birth_date',
        'is_actif',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
