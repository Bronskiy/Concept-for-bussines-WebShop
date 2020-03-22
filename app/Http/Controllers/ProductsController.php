<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function getProducts()
  {
    // $data['HomeData'] = 'Home::all()';
    // return view('pages.home',$data);
    return view('products.index');
  }

  public function getProduct()
  {
    return view('products.product');
  }

  public function search()
  {
    return view('products.search');
  }
}
