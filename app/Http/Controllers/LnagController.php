<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Config;
use Lang;
use App\Productclassification;
use App\Product;




class LnagController extends Controller
{

    

    public function index($lang){
        $pro=array();
    $dogs=array();

      $lang= Session::put('locale', app()->setlocale($lang));

      $nowLnag= Config::get('app.locale');

      $array = Lang::get('message');

      $dataArray=Productclassification::all();


      switch ($nowLnag){
          case 'ar':
            $pro=Product::all('arabic_name','arabic_discrption','imge_url');

            $dogs = Product::orderBy('id', 'desc')->take(5)->get();
      break;
      case 'en':

        $pro=Product::all('arabic_name','arabic_discrption','imge_url');

        $dogs = Product::orderBy('id', 'desc')->take(5)->get();

    

    return view('furn.index',compact('pro','dataArray','dogs'));
      break;
      }

     
      
      if(Config::get('app.locale')=='ar'){

        $pro=Product::all('arabic_name','arabic_discrption','imge_url');

        $dogs = Product::orderBy('id', 'desc')->take(5)->get();


    }


   // return r('furn.index',compact('pro','dataArray','dogs'));


    }
}
