<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        return view('main-qaz');
    }

    public function create()
    {
        return view('create-qaz');
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
        return view('starp', compact('path4'));
    }

}
