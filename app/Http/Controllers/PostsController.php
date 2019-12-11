<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Lost;
use App\Cast;
use App\User;
use App\Role;
class PostsController extends Controller
{

    public function index(){


        return view('index');
}



    public function insertreg(Request $request)
{
    $path = $request->input('name');
    $path2 = $request->input('email');
    $path3 = $request->input('pass');
    $path8 = $request->input('role');
    $flight = new User;
    $flight->name = $path;
    $flight->email = $path2;
    $flight->password = $path3;
    $flight->save();
    $path4 = 'df';
    $wsx = $flight->id;
    $role = new Role(['name' => $path8, 'display_name' => $path4]);
    
    User::find(1)->roles()->save($role, ['user_id' => $wsx, 'role_id' => 2]);//!&&&&&&
    
    return view('starp', compact('path4'));
}




public function upload1()
{
    $casts = 8; 

    
    return view('starp', compact('casts'));
}

public function insert(Request $request)
{
    $path = $request->file('image')->store('uploads', 'public');

    return view('starp', compact('path'));
}



public function getr()
{
    $path = DB::table('posts')->where('id', '1')->value('email');
    $path1 = DB::table('posts')->where('id', '1')->value('user_id');
    $path2 = DB::table('posts')->where('id', '1')->value('description');

    return view('start', compact('path', 'path1', 'path2'));
}


}
