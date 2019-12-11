<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    /**
   * Создание нового экземпляра рейса.
   *
   * @param  Request  $request
   * @return Response
   */
  public function insertr(Request $request)
  {
      $path = $request->file('image')->store('uploads', 'public');
      $path2 = $request->input('name');
      $path3 = $request->input('price');

    $flight = new Product;
    $flight->name = $path2;
    $flight->price = $path3;
    $flight->file = $path;
    $flight->save();
    return view('insertr', compact('path', 'path2', 'path3'));
  }

  public function upload()
  {
      return view('insertr');
  }

}
