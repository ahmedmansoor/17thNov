<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'userId',
        'detail',
        'image',
    ];

    function users()
    {
        return $this->belongsTo(User::class, 'userId');
    }
    function comments(){
        return $this->hasMany(Comment::class);
    }
}
