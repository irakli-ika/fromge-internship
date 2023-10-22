<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Like;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'heade',
        'body',
        'user_id'
    ];

    public function like() {
        return $this->hasMany(Like::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
    // public function like() {
    //     return $this->belongsTo(Like::class);
    // }
    
}
