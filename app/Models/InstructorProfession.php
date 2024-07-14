<?php

namespace App\Models;

use App\Models\Instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstructorProfession extends Model
{
    use HasFactory;
    protected $fillable = ['instructor_id','professions'];
    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}
