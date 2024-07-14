<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = ['section_id','quiz_title','quiz_duration','total_marks','pass_marks','applicable','retake_no','instruction'];
}
