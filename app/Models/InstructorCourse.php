<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstructorCourse extends Model
{
    use HasFactory;
    protected $fillable = ['instructor_id','course_id'];
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}