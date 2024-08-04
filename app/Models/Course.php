<?php

namespace App\Models;

use App\Models\Section;
use App\Models\Category;
use App\Models\LiveClass;
use App\Models\InstructorCourse;
use App\Models\StudentEnrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_title','course_title_bn','slug','course_short_desc','short_description_bn','description','description_bn','category_id','level','language','course_status',
    'is_free','price','price_bn','discounted_price','expire_time','duration','enroll_date'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function sections()
    {
        return $this->hasMany(Section::class, 'course_id', 'id');
    }

    public function studentEnrollments()
    {
        return $this->hasMany(StudentEnrollment::class, 'course_id', 'id');
    }

    // Relations with other models
    public function requirements()
    {
        return $this->hasMany(CourseRequirements::class, 'course_id', 'id');
    }

    public function faqs()
    {
        return $this->hasMany(CourseFaq::class, 'course_id', 'id');
    }

    public function outcomes()
    {
        return $this->hasMany(CourseOutcome::class, 'course_id', 'id');
    }

   
    public function media()
    {
        return $this->hasMany(CourseMedia::class,'course_id','id');
    }
    public function batch()
    {
        return $this->hasMany(Batch::class, 'course_id','id');
    }

    public function meta()
    {
        return $this->hasOne(CourseMeta::class, 'course_id', 'id');
    }
    public function instructors()
    {
        return $this->hasMany(InstructorCourse::class,'course_id','id');
    }
    public function liveclass(){
        return $this->hasMany(LiveClass::class,'course_id','id');
    }
}