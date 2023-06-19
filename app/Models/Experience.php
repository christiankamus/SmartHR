<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'society_id',
        'start_date',
        'end_date',
        'details',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
