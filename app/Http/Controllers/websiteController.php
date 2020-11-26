<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Contacts;
use App\Productclassification;
use Config;


class websiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $pro=array();
          $dogs=array();
        $dataArray=Productclassification::all();
       $contets=Contacts::all();

        if(Config::get('app.locale')=='ar'){

            $pro=Product::all('arabic_name','arabic_discrption','imge_url');

            $dogs = Product::orderBy('id', 'desc')->take(5)->get();


        }

        elseif ( Config::get('app.locale') == 'en' )
        {
            
            $pro=Product::all();

            $dogs = Product::orderBy('id', 'desc')->take(5)->get();

        }

        $pro=Product::orderBy('id', 'desc')->take(4)->get();

        $dogs = Product::all();

        
      //  return json_encode($pro);

      // dd($pro->imge_);
      $last=Product::orderBy('id')->take(3)->get();


        return view('furn.index',compact('pro','dataArray','dogs','contets','last'));
    }

    public function getImages(){
        $pro=Product::orderBy(Product::raw('RAND()'))->take(2)->get();

        return json_encode($pro);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function dreontaionReport()
    {
        return view('layouts.duration-report');

    }
    public function monthreport()
    {
       // $incomeData=Incoming::all();

        return view('layouts.report');

    }
}
