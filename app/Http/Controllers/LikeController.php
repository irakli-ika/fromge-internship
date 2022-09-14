<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
    public function like(Request $request) {
        $post_id = $request->input('post_id');
        $is_like = Like::where([
            ['post_id', $post_id],
            ['user_id', Auth::user()->id]
        ])->get();
        
        $like_qty = Like::Where('post_id', $post_id)->count();
        
        if($is_like->isEmpty()) {
            $like = new Like();
            $like -> user_id = Auth::user()->id;
            $like -> post_id = $post_id;
            $like -> save();

            return [ 'status' => 'like' ];

        } else {
            $is_like->first()->delete();

            return [ 'status' => 'dislike' ];
        }
    }

}