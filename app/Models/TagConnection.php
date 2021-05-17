<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagConnection extends Model
{
    protected $fillable=[
        'article_id',
        'tag_id'
    ];

    public function articles(){
        return $this->belongsTo(Article::class);
    }
    public function tags(){
        return $this->belongsTo(Tag::class);
    }

    protected $table='articles_tag_connections';
    use HasFactory;
}
