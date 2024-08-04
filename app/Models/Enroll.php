<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    protected $fillable = ['student_enrol_id', 'country', 'state', 'mobile_no', 'email', 'current_address', 'studentID', 'enroll_status'];

  
       public function studentEnrollment()
    {
        return $this->belongsTo(StudentEnrollment::class, 'student_enrol_id');
    }
}