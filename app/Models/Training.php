<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'society_id',
        'start_date',
        'end_date',
        'consideration',
        'evaluation',

    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function society()
    {
        return $this->belongsTo(Society::class);
    }
}
