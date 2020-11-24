<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

       // return "dgfgdxgf";
        $app=Contacts::all();

        return view('admin.contacts.list',compact('app'));

    }
    public function index2()
    {
        //

       // return "dgfgdxgf";
        $app=Contacts::all();

        return view('admin.contacts.list',compact('app'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.contacts.create');
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
         $saveContant=new Contacts;
         $saveContant->phone_number=request('phone_number');
         $saveContant->save();
          return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param Contacts $contacts
     * @return Response
     */
    public function show(Contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contacts $contacts
     * @return Response
     */
    public function edit(Contacts $contacts,$id)
    {
        //       
        $user = Contacts::where('id', $id)->first();
        return json_encode($user);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Contacts $contacts
     * @return Response
     */
    public function update(Request $request, Contacts $contacts)
    {
        //
        $editid = $request->input('id');

        $data = array('phone_number' => $request->input('phone_number'));
        $user = Contacts::where('id',$editid)->update($data);
        return json_encode('تم التعديل');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contacts $contacts
     * @return Response
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}
