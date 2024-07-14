<?php

namespace App\Models;

use App\Models\Instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstructorDesignation extends Model
{
    use HasFactory;
    protected $fillable = ['instructor_id','designation'];
    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}
