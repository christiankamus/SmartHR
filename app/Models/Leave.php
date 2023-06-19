<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'exercise_id',
        'start_date',
        'end_date',
        'taken_days',

    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function exercise()
    {
        return $this->belongsTo(exercise::class);
    }
}
