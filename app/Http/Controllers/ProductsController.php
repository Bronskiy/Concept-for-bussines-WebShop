<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblArtikel;

class ProductsController extends Controller
{
  // public function getProducts()
  // {
  //   // $data['HomeData'] = 'Home::all()';
  //   // return view('pages.home',$data);
  //   return view('products.index');
  // }

  public function getProduct(Request $request, $name = "default")
  {
    if ($name == "default") {
      abort(404);
    } else {
      $data['ArtikelData'] = TblArtikel::where('id', $name)->first();
      if (empty($data['ArtikelData'])) {
        abort(404);
      };
      return view('products.product',$data);
    }
  }

  public function search()
  {
    return view('products.search');
  }
}
