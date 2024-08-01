<?php

namespace App\Models;

use App\Models\Enroll;
use App\Models\StudentEnrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['studentsName','course_id','user_id','address','city','division','country','status','payment_status'];
    										
    public function enrollments()
    {
        return $this->hasMany(StudentEnrollment::class,'student_id','id');
    }

    public function enrollmentsThroughEnroll()
    {
        return $this->hasManyThrough(Enroll::class, StudentEnrollment::class,'student_id','student_enrol_id','id','id');
    }
    public function courseofstudents(){
        return $this->belongsTo(Course::class,'course_id');
    }
}