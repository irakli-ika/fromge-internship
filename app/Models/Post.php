<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'heade',
        'body',
        'user_id'
    ];

    public function comments() {
        return $this->belongsTo(Comment::class);
    }

    public function likes() {
        return $this->belongsTo(Like::class);
    }
    
}
