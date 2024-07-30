<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogFeature extends Model
{
    use HasFactory;
    protected $fillable = ['blog_feature_banner_title','blog_feature_banner_short_desc','blog_feature_banner_image'];
}
