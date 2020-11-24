<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Config;
use Lang;
use App\Productclassification;
use App\Product;
use App;




class LnagController extends Controller
{

  public function index($locale){
    App::setlocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
}
}
