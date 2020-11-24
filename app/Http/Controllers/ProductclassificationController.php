<?php

namespace App\Http\Controllers;

use App\Company;
use App\Productclassification;
use App\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;


class ProductclassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function inlineProen()
    {

        return view('inline.new-classfcation-en');
    }
    public function inlineProar()
    {

        return view('inline.new-classfcation-ar');
    }
    


    public function getRecord(Request $request, $from, $to)
    {
        $users = Productclassification::whereBetween('created_at', [$from, $to])->get();
        $table = ' ';

        $tableBody = ' ';
        $tableFooter = '</tbody></table></div>';


        $tableHead = '
                <div class="card-body p-0" dir="rtl">
                
                <table class="table table-striped">

                <td class="regular text">أسم المنتج</th>
                
                <th class="regular text">تاريخ االاضافى</th>
                 ';


        foreach ($users as $value) {


            $dataOfRoprt['calssfcation_type'] = $value->calssfcation_type;

            $dataOfRoprt['created_at'] = $value->created_at;


            $tableBody .= '<tr>

                    <td class="regular text"> ' . $dataOfRoprt['calssfcation_type'] . '</td>
                    
                    <td class="text regular"> ' . $dataOfRoprt['created_at'] . '</td>
                    
                    
                    
                 ';
        }

        return $tableHead . $tableBody . $tableFooter;;
    }

    public function index()
    {
        //
    }


    public function generatePDF58()
    {
        $data = ['title' => 'Laravel 5.8 HTML to PDF'];
        $pdf = PDF::loadView('ok', $data);
        return $pdf->download('demonutslaravel.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clas = Productclassification::all();
        return view('dashbord.new-pro-classification', compact('clas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $size = sizeof(request('calssfcation_type_arabic'));
        for ($i = 0; $i < $size; $i++) {

            $product = new Productclassification();
            $product->calssfcation_type_arabic = request('calssfcation_type_arabic')[$i];

            $product->calssfcation_type_english = request('calssfcation_type_english')[$i];
            $product->save();
        }


        $route = '/inline-inline-proclas';
        return redirect('/home')->with('status', $route);
    }

    public function getAllCat()
    {

        $clas = Productclassification::all();

        return json_encode($clas);

    }

    public function search($calssfcation_type)
    {
        $product = Productclassification::where('calssfcation_type', 'LIKE', '%' . $calssfcation_type . "%")->get();
        return json_encode($product);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\productclassification $productclassification
     * @return \Illuminate\Http\Response
     */
    
    public function editDeleteen()
    {


        $clas = Productclassification::all();

        return view('edit-delete-pro-classification-en', compact('clas'));

    }
    public function editDelete()
    {


        $clas = Productclassification::all();

        return view('edit-delete-pro-classification', compact('clas'));

    }


    public function calssfactionReport($date, $flag)
    {
        /* This  function  contains  all  reports  of  the  Productclassification  Data */

        $dataOfRoprt = array();

        $table = ' ';

        $tableBody = ' ';

        $tableHead = '
                <div class="card-body p-0" dir="rtl">
                
                <table class="table table-striped">
                                <td class="regular text">رقم الصنف</th>


                <td class="regular text">أسم الصنف</th>
                
                <th class="regular text">تاريخ الاضافة</th>
                 ';

        $tableFooter = '</tbody></table></div>';


        switch ($flag) {
            case  1:
                if (!isset($date)) {


                    $result = Company::whereDate('created_at', Carbon::today())->get();


                    foreach ($result as $value) {


                        $dataOfRoprt['calssfcation_type'] = $value->calssfcation_type;

                        $dataOfRoprt['created_at'] = $value->created_at;


                        $tableBody .= '<tr>

                    <td class="regular text"> ' . $dataOfRoprt['calssfcation_type'] . '</td>
                    
                    <td class="text regular"> ' . $dataOfRoprt['created_at'] . '</td>
                    
                    
                    
                 ';
                    }

                    return $tableHead . $tableBody . $tableFooter;;

                } elseif (isset($date)) {

                    $result = Productclassification::where('created_at', $date)->get();
                    foreach ($result as $value) {


                        $dataOfRoprt['calssfcation_type'] = $value->calssfcation_type;

                        $dataOfRoprt['created_at'] = $value->created_at;


                        $tableBody .= '<tr>

                    <td class="regular text"> ' . $dataOfRoprt['calssfcation_type'] . '</td>
                    
                    <td class="text regular"> ' . $dataOfRoprt['created_at'] . '</td>
                    
                    
                    
                 ';
                    }

                    return $tableHead . $tableBody . $tableFooter;
                }
                break;

            case 2:


                $result = Productclassification::whereBetween('created_at', [Carbon::now()->subWeek()->format('yy-mm-dd'), Carbon::now()])->get();


                foreach ($result as $value) {

                    $dataOfRoprt['calssfcation_type'] = $value->calssfcation_type;

                    $dataOfRoprt['created_at'] = $value->created_at;


                    //$dataOfRoprt['company_name']=$value->companies->company_name;

                    $tableBody .= '<tr>

                    <td class="regular text"> ' . $dataOfRoprt['calssfcation_type'] . '</td>
                    
                    <td class="text regular"> ' . $dataOfRoprt['created_at'] . '</td>
                    
                    
                    
                 ';
                }

                return $tableHead . $tableBody . $tableFooter;

                break;

            case 3:

                $result = Productclassification::whereMonth('created_at', date('m'))->get();


                foreach ($result as $value) {

                    $dataOfRoprt['calssfcation_type'] = $value->calssfcation_type;

                    $dataOfRoprt['created_at'] = $value->created_at;


                    //$dataOfRoprt['company_name']=$value->companies->company_name;

                    $tableBody .= '<tr>

                    <td class="text regular"> ' . $dataOfRoprt['name'] . '</td> 

                    <td class="regular text"> ' . $dataOfRoprt['calssfcation_type'] . '</td>
                    
                    <td class="text regular"> ' . $dataOfRoprt['created_at'] . '</td>
                    
                    
                    
                 ';
                }

                return $tableHead . $tableBody . $tableFooter;
                # ...
                break;

            case 4:

                $result = Productclassification::whereYear('created_at', date('Y'))->get();
                $counter = 1;

                foreach ($result as $value) {

                    $dataOfRoprt['calssfcation_type'] = $value->calssfcation_type;

                    $dataOfRoprt['created_at'] = $value->created_at;


                    //$dataOfRoprt['company_name']=$value->companies->company_name;

                    $tableBody .= '<tr>
                                           <td class="text regular">' . $counter++ . '</td>


                    <td class="regular text"> ' . $dataOfRoprt['calssfcation_type'] . '</td>
                    
                    <td class="text regular"> ' . $dataOfRoprt['created_at'] . '</td>
                    
                    ';
                }

                return $tableHead . $tableBody . $tableFooter;
                break;
        }


    }


    public function show(productclassification $productclassification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\productclassification $productclassification
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = Productclassification::where('id', $id)->first();
        return json_encode($user);

    }

    public function updateItem(Request $request)
    {

        $user_id = $request->input('id');
        $calssfcation_type = $request->input('calssfcation_type');
        $data = array('calssfcation_type_english' =>$request->input('calssfcation_type_english') ,'calssfcation_type_arabic'=>$request->input('calssfcation_type_arabic') );
        // Call updateData() method of Page Model
        $user = Productclassification::where('id', $user_id)->update($data);
        return json_encode('تم التعديل');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\productclassification $productclassification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productclassification $productclassification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\productclassification $productclassification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = Productclassification::where('id', $id)->delete();
        return json_encode("$user");
    }
}
