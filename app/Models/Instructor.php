<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','email','image','phone','address_one',
    'address_two','state','country','nationality','about','job_title','skill_level','language','dob','join_date'];

    public function designations()
    {
        return $this->hasMany(InstructorDesignation::class, 'instructor_id','id');
    }

    public function professions()
    {
        return $this->hasMany(InstructorProfession::class, 'instructor_id','id');
    }

    public function instructorCourses()
    {
        return $this->hasMany(InstructorCourse::class, 'instructor_id','id');
    }
}