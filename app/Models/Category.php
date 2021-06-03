<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'name',
        'description',
        'created_at',
        'updated_at',
        'parent_category_id',
        'slug',
        'seo_title',
        'seo_description'
    ];

    public function categories(){
        return $this->hasMany(self::class, 'id');
    }
    public function parent_category(){
        return$this->belongsTo(self::class,'parent_category');
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }


    protected $table = 'categories';
    use HasFactory;
}
