<?php

namespace App\Models;

use App\Models\Quiz;
use App\Models\Course;
use App\Models\Lession;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','section_title'];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lession::class, 'section_id', 'id');
    }

    public function quizes()
    {
        return $this->hasMany(Quiz::class, 'section_id', 'id');
    }
}