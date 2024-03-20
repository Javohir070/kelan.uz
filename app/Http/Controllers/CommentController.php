<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
       Comment::create([
        "user_id"=> Auth()->user()->id,
        "post_id"=> $request->post_id,
        "body"=> $request->body,
       ]);
       return redirect()->back();
    }
}
