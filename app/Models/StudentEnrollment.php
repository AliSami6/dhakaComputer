<?php

namespace App\Models;

use App\User;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentEnrollment extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'course_id', 'referral_code', 'referrer_id'];
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }
    public static function generateReferralCode()
    {
        return strtoupper(Str::random(10));
    }
    public function wallets()
    {
        return $this->hasMany(Wallet::class, 'student_id', 'student_id');
    }
}