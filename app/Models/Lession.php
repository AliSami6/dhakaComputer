<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lession extends Model
{
    use HasFactory;
    protected $fillable = ['lession_title','section_id','description','summary'];
    public function lessonforsections(){
        return $this->belongsTo(Section::class,'section_id');
    }
}
