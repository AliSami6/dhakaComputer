<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choose extends Model
{
    use HasFactory;
    protected $fillable = ['choose_image','choose_years','choose_title','choose_subtitle','short_description','content_one','content_two','content_three', 'button_text','button_url'];
}