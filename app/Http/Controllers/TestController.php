<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;

class TestController extends Controller
{


    


   // ТЕСТ
   public function testOne()
   {
       return view('ajax');
   }

   public function testTwo(Request $request)
   {
       $time = Product::find(20);
       $json = $time->toJson();

       return response()->json(["data"=>$json]);
   }
}
