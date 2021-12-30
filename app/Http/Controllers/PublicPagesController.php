<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PublicPagesController extends Controller
{
    public function index(){

        $categories=Category::all();
        return view('public_site.index',compact('categories'));
    }
    public function post($category_id){
        $cat_name = Category::where('category_id',$category_id)->first();
        $cat_name = $cat_name->category_name;

        $categories=Post::all()->where('category_id',$category_id);

        return view('public_site.posts',compact('categories','cat_name'));
    }
    public function store(Request $request){
        $id = DB::table('users')->where('email', session('email'))->value('id');
        Post::create([
            'post_title'=>$request->post_title,
            'post_body'=>$request->post_body,
            'category_id'=>$request->category_id,
            'post_tag'=>$request->post_tag,
            'user_id'=>$id
        ]);
        $path="index/$request->category_id";
        return redirect($path)->with('success','Post Added Succesfully');
    }

}
