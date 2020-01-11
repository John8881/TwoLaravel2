<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\Cache;


class ProductController extends Controller
{
    /**
     * Создание нового экземпляра рейса.
     *
     * @param  Request  $request
     * @return Response
     */

    public function index()
    {
        return view('main-qaz');
    }

    public function create_st()
    {
        return view('create-qaz');
    }

    public function create(Request $request)
    {  
        $wsx = $request->file('foto');
        $path = Storage::disk('public')->put('uploads', $wsx);

        $qaz = new Product;
        $qaz->name = $request->input('name');
        $qaz->file = $path;
        $qaz->old_price = $request->input('old_price');
        $qaz->price = $request->input('price');
        $qaz->sale = $request->input('sale');
        $qaz->address = $request->input('address');
        $qaz->tel = $request->input('tel');
        $qaz->desc = $request->input('desc');


        $qaz->save();
        $path4 = 'Объявление созданно!';
       
        return view('create-qaz', compact('path4');
    }

}

