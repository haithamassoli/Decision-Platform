<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
  public function destroy($post)
  {
      Post::where('post_id',$post)->delete();
      return redirect('/user_profile')->with('success','تم حذف المنشور بنجاح');
  }
  public function add(Request $request)
  {
    // dd($request->post_id);
    $id = DB::table('users')->where('email', session('email'))->value('id');
    Comment::create([
        'comment'=>$request->comment,
        'user_id'=>$id,
        'post_id'=>$request->post_id,
      ]);
      return redirect()->back();
  }
}
