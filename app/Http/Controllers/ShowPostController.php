<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShowPostController extends Controller
{
    public function show($id){
        $posts = DB::table('posts')
        ->select('*')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->join('categories', 'categories.category_id', '=', 'posts.category_id')
        ->where('posts.post_id', '=', $id)
        ->get();

        $comments =  DB::table('comments')
        ->select('*')
        ->join('users', 'users.id', '=', 'comments.user_id')
        ->join('posts', 'comments.post_id', '=', 'posts.post_id')
        ->where('posts.post_id', '=', $id)
        ->get();
        // dd($comments);
        return view('public_site.single_post',compact('posts','comments'));
    }
    
    public function search(Request $request){
        $search_text = $request->get('query');
        $posts = DB::table('posts')
        ->select('*')
        ->join('categories', 'categories.category_id', '=', 'posts.category_id')
        ->where('post_title', 'LIKE', '%'.$search_text.'%')
        ->orWhere('post_body', 'LIKE', '%'.$search_text.'%')
        ->orWhere('post_tag', 'LIKE', '%'.$search_text.'%')->get();


        // dd($posts);
        return view('public_site.search',compact('posts'));
    }
}
