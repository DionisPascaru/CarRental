<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'age',
        'article_id',
        'reservation_start',
        'reservation_end',
        'order_status'
    ];
    /**
     * @var mixed
     */

    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public $timestamps = false;
}
