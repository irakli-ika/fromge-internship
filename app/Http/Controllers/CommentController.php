<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Comment;

class CommentController extends Controller
{
    public function comment(Request $request) {
        $post_id = $request->post_id;
        $comment_body = $request->comment_body;
        if ($comment_body) {
            $comment = new Comment();
            $comment -> post_id = $post_id;
            $comment -> user_id = Auth::user()->id;
            $comment -> comment_body = $comment_body;
            $comment -> save();

            // return ['status' => 'commented'];
            return $comment;
        } else {
            return ['status' => 'false'];
        }
    }
}
