<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteInfo extends Model
{
    use HasFactory;
    protected $fillable = ['site_name','site_email','site_copyright','website_title','website_description','logo','favicon'];
}
