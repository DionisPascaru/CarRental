<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    const UPDATED_AT = 'modified_at';

    protected $fillable = [
        'title',
        'short_description',
        'content',
        'created_at',
        'modified_at',
        'published_at',
        'seo_title',
        'seo_description',
        'slug',
        'author_id',
        'category_id',
        'specification_id'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function specifications()
    {
        return $this->belongsTo(Specification::class, 'specification_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function images()
    {
        return $this->belongsTo(Image::class, 'id', 'article_id');
    }

    public function tagsConnections(){
        return $this->hasMany(TagConnection::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    protected $table = 'articles';
    use HasFactory;
}
