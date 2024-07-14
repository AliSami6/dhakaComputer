<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name','description','cat_icon'];

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }
    
    public function courses()
    {
        return $this->hasMany(Course::class,'category_id','id');
    }
}