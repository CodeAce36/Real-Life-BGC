<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Applicant extends Authenticatable
{
    protected $primaryKey = 'applicant_id';
    protected $table = 'applicants';

    protected $fillable = [
        'email',
        'password',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function personalInformation()
    {
        return $this->hasOne(ApplicantsPersonalInformation::class, 'applicant_id', 'applicant_id');
    }

    public function academicInformation()
    {
        return $this->hasOne(ApplicantsAcademicInformation::class, 'applicant_id', 'applicant_id');
    }

    public function academicInformationGrade()
    {
        return $this->hasOne(ApplicantsAcademicInformationGrade::class, 'applicant_id', 'applicant_id');
    }

    public function academicInformationChoice()
    {
        return $this->hasOne(ApplicantsAcademicInformationChoice::class, 'applicant_id', 'applicant_id');
    }
}
