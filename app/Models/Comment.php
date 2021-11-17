<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'userId',
        'post_Id',

    ];

    function users()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    function post()
    {
        return $this->belongsTo(Post::class, 'post_Id');
    }
}