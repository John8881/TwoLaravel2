<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
// use App\Facades\Larademo\Larademo;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;


class ProductController extends Controller
{
     /**
     * Создаёт посредников для методов контролера.
     *
     * @return void
     */ 
    // $this->middleware('log')->only('index');
    // $this->middleware('subscribed')->except('store');
    public function __construct()
    {
      $this->middleware('auth')->except('show', 'testos', 'testos1', 'tes');
      
    }
    public function testos()
    {
        $product = Session::get('cart');
        // $product = $productService->all();
        $qaz = Product::qwerrt();
        $product = array_unique($product);
        // $qaz = $product[0];
        $qaz1 = $product[1];
        $qaz2 = $product[2];
        
        return view('test', compact('qaz', 'qaz1', 'qaz2'));
    }
    // TODO 
    public function testos1()
    {   if(Session::has('cart')){
            $qaz = Session::get('cart');
        }
        $wsx = array_unique($qaz);
        $qwerty = count($wsx);
        if ($qwerty>2)
        {
            $product = 'yes';
        }else{
            $product = 'no';
        }
        return view('test', compact('product'));
    }

    /**
     * 1 шаг: Просмотр товаров конкретным пользователем.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $prod = Product::where('user_id', $id)->get();
        return view('moio-qaz', compact('prod'));
    }

    /**
     * 2/1 шаг: Вывести форму для вставки нового товара
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-qaz');
    }

    /**
     * 2/2 шаг: POST - вставляет товар в базу данных из формы (create())
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wsx = $request->file('foto');
        // $wsx = $request->file('foto')->store('uploads', 'public');
        $path = Storage::disk('public')->put('uploads', $wsx);
        
        $qaz = new Product;
        $qaz->name = $request->input('name');
        $qaz->category = $request->cat; //это передача поля select с именем= "name" из blade
        
        $qaz->user_id = Auth::user()->id;
        $qaz->file = $path;
        $qaz->old_price = $request->input('old_price');
        $qaz->price = $request->input('price');
        $qaz->sale = $request->input('sale');
        $qaz->address = $request->input('address');
        $qaz->tel = $request->input('tel');
        $qaz->desc = $request->input('desc');
        
        $qaz->save();
        // Product::where('created_at','<', Carbon::now()->addDays(-30))->delete();
        $path4 = 'Объявление добавленно!';
        return view('create-qaz', compact('path4'));
    }

    /**
     * 3 шаг: Покаывает товар из базы по id 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->supportShow($id);

        // Счётчик остатка дней до конца акции
        $ydh = Carbon::now()->addDays(-30);
        $flb = Product::find($id)->value('created_at');
        $time = $ydh->diffInDays($flb, false);
        // 2
        $item = Product::find($id);
        
        return view('product-qaz', compact('item', 'time'));
    }
    public function supportShow($id)
        {
            if (Session::has('cart'))
            {
                return Session::push('cart', $id);
            }else{
                $products = [];
                return Session::put('cart', $products);
            }
        }
    /**
     * 4/1 шаг: Выводоит форму для редактирования товара то id 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Счётчик остатка дней до конца акции
        $ydh = Carbon::now()->addDays(-30);
        $flb = Product::find(20)->value('created_at');
        $time = $ydh->diffInDays($flb, false);
        // 2
        $item = Product::find($id);
        
        return view('change-qaz', compact('item', 'time'));
    }

    /**
     * 4/2 шаг: POST - вставляет отредактированный товар в базу из формы (edit($id)).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $qaz = Product::find($id);
        $qaz->name = $request->input('name');
        $qaz->old_price = $request->input('old_price');
        $qaz->price = $request->input('price');
        $qaz->sale = $request->input('sale');
        $qaz->address = $request->input('address');
        $qaz->tel = $request->input('tel');
        $qaz->whck = Auth::user()->id;
        $qaz->desc = $request->input('desc');
        $qaz->category = $request->cat; //это передача поля select с именем= "name" из blade
        
        $qaz->save();
        return view('moio-qaz');
    }

    /**
     * 5 шаг: Удаляет товар из базы по id 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Product::find($id);
        $flight->delete();

        return redirect()->route('products.index');
    }

}

