<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'contract_type_id',
        'entry_type',
        'start_date',
        'end_date',
        'termination_reason',
        'comments',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function contract_type()
    {
        return $this->belongsTo(ContractType::class);
    }
}
