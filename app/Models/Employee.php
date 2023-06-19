<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'name',
        'lastname',
        'firstname',
        'father',
        'mother',
        'family_position',
        'birth_date',
        'country_id',
        'state_id',
        'city_id',
        'territory',
        'sector',
        'identity_document',
        'identity_document_number',
        'phone',
        'email',
        'marital_status',
        'educationlevel_id',
        'cnss_number',
        'category_id',
        'fonction_id',
        'team_id',
        'section_id',
        'service_id',
        'department_id',
        'site_id',

    ];


    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function disciplines()
    {
        return $this->hasMany(Discipline::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function educationlevel()
    {
        return $this->belongsTo(EducationLevel::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function fonction()
    {
        return $this->belongsTo(fonction::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
