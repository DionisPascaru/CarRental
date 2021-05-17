<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $fillable=[
      'color',
      'fuel',
      'transmission',
      'year',
      'article_id'
    ];

    public function articles(){
        return $this->hasOne(Article::class);
    }


    use HasFactory;
}
