<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'record_date',
        'sanction_id',
        'fault_committed',
        'comments',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function sanction()
    {
        return $this->belongsTo(Sanction::class);
    }
}
