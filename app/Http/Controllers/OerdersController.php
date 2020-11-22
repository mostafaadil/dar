<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Oerders;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OerdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $ordersInfo = Oerders::where('state','0')->get();
        return view('admin.orders.list', compact('ordersInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $saveOrder = new Oerders();
        $saveOrder->pick_date = $request->input('pick_date');
        $saveOrder->car_id = $request->input('car_id');
        $saveOrder->delever_date = $request->input('delever_date');
        $saveOrder->coustmer_linece = $request->input('coustmer_linece');
        $saveOrder->state = 0;

        $saveOrder->time = $request->input('time');
        $saveOrder->save();
        return redirect('/car-book');
       // $saveOrder->pick_date = $request->input('pick_date');


    }

    /**
     * Display the specified resource.
     *
     * @param Oerders $oerders
     * @return Response
     */
    public function show(Oerders $oerders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Oerders $oerders
     * @return Response
     */
    public function edit(Oerders $oerders,$id)
    {
        //
        $arry=array('state'=>1);
        Oerders::where('id',$id)->update($arry);
        return  ('order processed secssfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Oerders $oerders
     * @return Response
     */
    public function update(Request $request, Oerders $oerders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Oerders $oerders
     * @return Response
     */
    public function destroy(Oerders $oerders)
    {
        //
    }
}
