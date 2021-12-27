<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }
    public function manage_user(){

     $users=User::all();

        return view('pages.manage_user',compact('users'));
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_user(Request $data){

            // $request['password']=Hash::make('$request->password');

            // User::create($request->all());

            $image = 'IMG'.'-'.time().'.'.$data->image->extension();
            $data->image->move(public_path('black/img'),$image);
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'role'=>$data['role'],
                'password' => Hash::make($data['password']),
                'image'=>$image
            ]);
            // dd($data['role']);
            return redirect()->route('manage_user');
    }
    public function edit_user(User $user)
    {

        return view('users.edit',compact('user'));
    }

    public function update_user(Request $request,$id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
         User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);


        return redirect()->route('manage_user')
                        ->with('success','تم تعديل المستخدم بنجاح');
    }
    public function destroy(User $user)
    {

        $user->delete();



        return redirect()->route('manage_user')
                       ->with('success','تم اضافة المستخدم بنجاح');

    }
}
