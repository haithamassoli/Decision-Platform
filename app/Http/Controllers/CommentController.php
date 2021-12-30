<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    public function index()
    {

        // $comments = Comment::all();
        $comments = DB::table('comments')
        ->select('*')
        ->join('users', 'users.id', '=', 'comments.user_id')
        ->join('posts', 'posts.post_id', '=', 'comments.post_id')
        ->paginate(10);

        return view("pages.comment.manage_comment", compact("comments"));


        // $comments = Comment::with('category')->get();

        // return view('products.index', compact('products', 'categories'));



    }

    public function create()
    {
        //
    }

    public function store(StoreCommentRequest $request)
    {
        //
    }
    public function show(Comment $comment)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }


    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    public function destroy($comment)
    {
        Comment::where('comment_id',$comment)->delete();
        return redirect('admin/manage_comments')->with('success','تم حذف التعليق بنجاح');
    }
}
