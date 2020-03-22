<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnePageController extends Controller
{
  public function getHome()
  {
    // $data['HomeData'] = 'Home::all()';
    // return view('pages.home',$data);
    return view('pages.home');
  }
}
