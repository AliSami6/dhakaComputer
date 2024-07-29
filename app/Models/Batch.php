<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','batch_no','batch_code','class_type','class_start','class_rutine','class_time','total_class','total_seat'];
}
