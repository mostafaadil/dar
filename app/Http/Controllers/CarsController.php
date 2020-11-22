<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $cars = Cars::all();
        return view('website.carbook.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.cars.create');
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
        $carsSave = new Cars;
        $carsSave->car_name = $request->input('car_name');
        $carsSave->car_type = $request->input('car_type');
        $carsSave->book_per_day = $request->input('book_per_day');

        $image = $request->file('car_photo');

        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        //$this->save();
        $carsSave->car_photo = ('/images') . '/' . $name;
        $carsSave->save();
        return redirect('cars/create');


    }

    /**
     * Display the specified resource.
     *
     * @param Cars $cars
     * @return Response
     */
    public function show(Cars $cars)
    {
        //
        $carsSelect = Cars::all();
        return view('admin.cars.list', compact('carsSelect'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cars $cars
     * @return Response
     */
    public function edit(Cars $cars, $id)
    {
        //
        $car = Cars::where('id', $id)->first();
        return json_encode($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Cars $cars
     * @return Response
     */
    public function update(Request $request, Cars $cars)
    {
        $car_id = $request->input('id');

        /*$image = $request->file('car_photo');

        $name = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/images');

        $image->move($destinationPath, $name);
*/
        $requset_array = array('car_name' => $request->input('car_name'),
            'car_type' => $request->input('car_type'), 'car_photo' => "Ggggg");
        if (Cars::where('id', $car_id)->update($requset_array)) ;
        {
            return json_encode("update sesscfully");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cars $cars
     * @return Response
     */
    public function destroy(Cars $cars, $id)
    {
        //
        Cars::where('id', $id)->delete();
        return json_encode("delete data secssfully");
    }

    public function getCarsData()
    {
        $cars = Cars::all();
        // return view('website.carbook.car');
        return view('website.carbook.car', compact('cars'));

    }

    public  function  aboutUs(){
        return view('website.carbook.about');
    }
    public function blog(){
        return view('website.carbook.blog');
    }

    public function contact(){
        return view('website.carbook.contact');
    }
    public  function pricing(){
        return view('website.carbook.pricing');

    }
    public function carsDataJson()
    {
        $cars = Cars::all();
        // return view('website.carbook.car');
        //return view('website.carbook.car', compact('cars'));
         return json_encode($cars);
    }

}
