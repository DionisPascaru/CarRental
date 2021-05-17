<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=[
        'name',
        'created_at',
        'updated_at',
        'slug'
    ];

    public function articles_tags_connections(){
        return $this->hasMany(TagConnection::class);
    }
    protected $table = 'tags';
    use HasFactory;
}
