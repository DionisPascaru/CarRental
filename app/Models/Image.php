<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=[
        'name',
        'created_at',
        'updated_at',
        'size',
        'path',
        'article_id'
    ];

    public function articles(){
        return $this->hasMany(Article::class);
    }
    protected $table = 'images';
    use HasFactory;
}
