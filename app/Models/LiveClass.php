<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveClass extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','class_date','start_time','end_time','metting_link','metting_platform'];
    public function livecourses(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
