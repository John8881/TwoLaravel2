<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use App\Services\UserService;
use App\Services\MessageService\SendMessageInterface;
use App\Services\MessageService\SendMessageEmail;
use App\Services\MessageService\SendMessageSMS;

class HomeController extends Controller
{

    /**
     * ПОЛУЧЕНИЕ ТОВАРОВ НА ГЛАВН СТР
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {   
        
    //     $prod = Product::take(5)->get();
    //     return view('main-qaz', compact('prod'));
    // }
    public function index(UserService $userService)
    {   
        
        $userService->handleUserLogin();
        // return view('test', compact('prod'));
        return view('test');
    }

    public function sendMessage(Request $request, SendMessageInterface $sendMessageInterface)
    {   
        
        $sendMessageInterface->SendMessage("Amitav", $request->input('message'));
        if ($request->input('mode') == 1) {
            app()->bind(SendMessageInterface::class, SendMessageSMS::class);
        }else {
            app()->bind(SendMessageInterface::class, SendMessageEmail::class);
        }
        return $request->all();
    }
    // 2DFHBFYN 
    // public function sendMessage(Request $request)
    // {   
        
        
    //     if ($request->input('mode') == 1) {
    //         app()->bind(SendMessageInterface::class, SendMessageSMS::class);
    //     }else {
    //         app()->bind(SendMessageInterface::class, SendMessageEmail::class);
    //     }

    //     $sendMessageInterface = app()->make(SendMessageInterface::class);
    //     $sendMessageInterface->SendMessage("Amitav", $request->input('message'));
    //     return $request->all();
    // }










    // КАТЕГОРИИ
    public function categoryAll($name)
    {
        $prod = Product::where('category', $name)->paginate(12);
        return view('category-qaz', compact('prod', 'name'));
    }
    // public function categoryPut(Request $request)
    // {
    //     $prod = 'ddfd';
    //     return view('test', compact('prod'));
    // }
    // TODO : will make a new view  
    public function search(Request $request)
    {
        $search = $request->search;
        $prod = Product::where('name', 'LIKE', '%$search%')->get();
        return view('category-qaz', compact('prod'));
    }
}
