<?php

namespace App\Http\Controllers;

use App\PickedStratigy;
use Illuminate\Http\Request;
use App\Product;
use App\Productclassification;
use PDF;
use Carbon\Carbon;
use App\Incoming;
use App\Produactstatus;
use App\Soothing;
use App\Strategies;
use App\Contacts;



class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function inlinePro()
    {
        $pro = Product::all();

        $classfcation = Productclassification::all();
        return view('inline.new-porudact', compact('pro', 'classfcation'));
    }
    public function inlineProar()
    {
        $pro = Product::all();

        $classfcation = Productclassification::all();
        return view('inline.new-porudact-ar', compact('pro', 'classfcation'));
    }


    public function getRecord(Request $request, $from, $to)
    {
        $users = Product::whereBetween('created_at', [$from, $to])
            ->get();
        // return

        $dataOfRoprt = array();

        $table = ' ';

        $tableBody = ' ';

        $tableHead = '
                    <div class="card-body p-0">
    
                    <table class="table table-striped">
                   
                    <thead> <tr>  <th style="width: 10px">#</th><th>اسم المنتج</th>
                   
                    <th>الصنف</th>  <th style="width: 40px">تاريخ  الدخول للمخذن</th></tr> </thead><tbody>';

        $tableFooter = '</tbody></table></div>';


        foreach ($users as $value) {

            $dataOfRoprt['name'] = $value->name;

            $dataOfRoprt['enter_date'] = $value->enter_date;

            $dataOfRoprt['classfcation'] = $value->productclassification->calssfcation_type;

            $tableBody .= '
                          <tr>
                          
                          <td>1.</td>
                          
                          <td>' . $dataOfRoprt['name'] . '</td>
                          
                          <td><div class="progress progress-xs">
                              
                          <div class="badge bg-success" style="width: 55%">' . $dataOfRoprt['classfcation'] . '</div>
                          
                          </div>
                          
                          </td>
                          
                          <td><span lass="external-event bg-success">' . $dataOfRoprt['enter_date'] . '</span></td>
                        
                        </tr>
                     ';
        }

        return $tableHead . $tableBody . $tableFooter;;


        //  return  $users;
    }

    public function adminRepot($id)
    {
        $amounts = 0;
        $IncomingEmptyAarry = array();
        $proSutusEmptyAarry = array();
        $soothingEmptyAarry = array();
        $stratigyEmptyAarry = array();
        $allDataOfEmptyAarry = array();

        $IncomingEmptyAarry["proudact_incoming"] = Incoming::where('product_id', $id)->get();

        $proSutusEmptyAarry["proudact_sutus"] = Produactstatus::where('product_id', $id)->get();

        $soothingEmptyAarry["proudact_soothings"] = Soothing::where('product_id', $id)->get();

        $stratigyEmptyAarry["proudact_startigie"] = Strategies::where('product_id', $id)->get();

        array_push($allDataOfEmptyAarry, $IncomingEmptyAarry, $proSutusEmptyAarry, $soothingEmptyAarry, $stratigyEmptyAarry);

        return json_encode($allDataOfEmptyAarry);


    }
    

    
    public function editDeleteen()
    {
        $pro = Product::all();

        $classfcation = Productclassification::all();

        return view('edit-delete-pro-en', compact('pro', 'classfcation'));
    }

    
    public function byCat($id)
    {
        $dataArray=Productclassification::all();
        $contets=Contacts::all();
        $dogs=array();

        $pro = Product::where('classfcation_id',$id)->get();

        $dogs = Product::orderBy('id', 'desc')->take(5)->get();

        return view('furn.cats', compact('pro','dataArray','dogs','contets'));
    }





    public function editDelete()
    {
        $pro = Product::all();

        $classfcation = Productclassification::all();

        return view('edit-delete-pro', compact('pro', 'classfcation'));
    }

    public function index()
    {
        //
        return view('dashbord.index');
    }

    public function getAllData()
    {
        $final=array();
        $putInsdeArray=array();
        $data=PickedStratigy::all()->get();
        foreach ($data as $itData){
            $final=Product::where('id','!=',$itData->proudact_id)->get();
            foreach ($final as $finlData){
                array_push($putInsdeArray,array('id'=>$finlData->id,'name'=>$finlData->name));
            }
        }

        return json_encode($putInsdeArray);

    }

    public function getTarget($id)
    {


        $pro = Product::where('id', $id)->get();

        return json_encode($pro);


    }


    public function prodactReport()
    {
        # code...
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classfcation = Productclassification::all();

        return view('dashbord.new-product', compact('classfcation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $size = sizeof(request('english_name'));
        for ($i = 0; $i < $size; $i++) {
            $product = new Product();

            $product->english_name = request('english_name')[$i];
            $product->arabic_name = request('arabic_name')[$i];
            $product->classfcation_id = request('classfcation_id')[$i];
            $product->arabic_discrption = request('arabic_discrption')[$i];
            $product->english__discrption = request('english__discrption')[$i];


            $image = $request->file('imge_url')[$i];

            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $product->imge_url = ('/images') . '/' . $name;

            $v = $product->save();
        }
        $route = '/inline-pro';
        if ($v == 1) {
            return redirect('/home')->with('status', $route);

        } elseif ($v != 1) {
            return redirect('/home')->with('status', $route);
        }


        return redirect('/home')->with('status', 'تم الحفظ بنجاح');


    }

    public function search($name)
    {
        $product = Product::where('name', 'LIKE', '%' . $name . "%")->get();

        return json_encode($product);
    }

    public function prodactsReport($date, $flag)
    {

        $dataOfRoprt = array();

        $table = ' ';

        $tableBody = ' ';

        $tableHead = '
                    <div class="card-body p-0">
    
                    <table class="table table-striped">
                   
                    <thead> <tr>  <th style="width: 10px">#</th><th>اسم المنتج</th>
                   
                    <th>الصنف</th>  <th style="width: 40px">تاريخ  الدخول للمخذن</th></tr> </thead><tbody>';

        $tableFooter = '</tbody></table></div>';

        $pdfPrint = '';

        switch ($flag) {
            case  1:
                if (!isset($date)) {
                    $result = Product::whereDate('created_at', Carbon::today())->get();
                  //  return json_encode($result);
                  $counter = 1;

                    foreach ($result as $value) {
            
                        $dataOfRoprt['arabic_name'] = $value->arabic_name;
                        $dataOfRoprt['english_name'] = $value->english_name;
                        $dataOfRoprt['arabic_discrption'] = $value->arabic_discrption;
                        $dataOfRoprt['english_discrption'] = $value->english_discrption;
                        $dataOfRoprt['imge_url'] = $value->imge_url;
    
    
                        $dataOfRoprt['classfcation'] = $value->productclassification->calssfcation_type;
                        $tableBody .= '<tr>
                          <td class="text regular">' . $counter++ . '</td>
                              <td>' . $dataOfRoprt['arabic_name'] . '</td>
                              <td>' . $dataOfRoprt['english_name'] . '</td>
                              <td>' . $dataOfRoprt['arabic_discrption'] . '</td>
                              <td>' . $dataOfRoprt['english_discrption'] . '</td>
                              <td> <img src="' . $dataOfRoprt['imge_url'] . '"
                              style="width:177px;hight:167px/></td>
    
    
                              <td>
                                  <div class="badge bg-success" >' . $dataOfRoprt['classfcation'] . '</div>
                                </div>
                              </td>
                            </tr>
                         ';
                    }

                    return $tableHead . $tableBody . $tableFooter;;

                } elseif (isset($date)) {

                    $result = Product::where('created_at', $date)->get();
                    $counter = 1;

                    foreach ($result as $value) {
                  
                        $dataOfRoprt['arabic_name'] = $value->arabic_name;
                        $dataOfRoprt['english_name'] = $value->english_name;
                        $dataOfRoprt['arabic_discrption'] = $value->arabic_discrption;
                        $dataOfRoprt['english_discrption'] = $value->english_discrption;
                        $dataOfRoprt['imge_url'] = $value->imge_url;
    
    
                        $dataOfRoprt['classfcation'] = $value->productclassification->calssfcation_type;
                        $tableBody .= '<tr>
                          <td class="text regular">' . $counter++ . '</td>
                              <td>' . $dataOfRoprt['arabic_name'] . '</td>
                              <td>' . $dataOfRoprt['english_name'] . '</td>
                              <td>' . $dataOfRoprt['arabic_discrption'] . '</td>
                              <td>' . $dataOfRoprt['english_discrption'] . '</td>
                              <td> <img src="' . $dataOfRoprt['imge_url'] . '"
                              style="width:177px;hight:167px/></td>
    
    
                              <td>
                                  <div class="badge bg-success" >' . $dataOfRoprt['classfcation'] . '</div>
                                </div>
                              </td>
                            </tr>
                         ';
                    }

                    return $tableHead . $tableBody . $tableFooter . $pdfPrint;
                }
                break;

            case 2:


                $result = Product::whereBetween('created_at', [Carbon::now()->subWeek()->format('yy-mm-dd'), Carbon::now()])->get();

                $counter = 1;

                foreach ($result as $value) {
                    $dataOfRoprt['arabic_name'] = $value->arabic_name;
                    $dataOfRoprt['english_name'] = $value->english_name;
                    $dataOfRoprt['arabic_discrption'] = $value->arabic_discrption;
                    $dataOfRoprt['english_discrption'] = $value->english_discrption;
                    $dataOfRoprt['imge_url'] = $value->imge_url;


                    $dataOfRoprt['classfcation'] = $value->productclassification->calssfcation_type;
                    $tableBody .= '<tr>
                      <td class="text regular">' . $counter++ . '</td>
                          <td>' . $dataOfRoprt['arabic_name'] . '</td>
                          <td>' . $dataOfRoprt['english_name'] . '</td>
                          <td>' . $dataOfRoprt['arabic_discrption'] . '</td>
                          <td>' . $dataOfRoprt['english_discrption'] . '</td>
                          <td> <img src="' . $dataOfRoprt['imge_url'] . '"
                          style="width:177px;hight:167px/></td>


                          <td>
                              <div class="badge bg-success" >' . $dataOfRoprt['classfcation'] . '</div>
                            </div>
                          </td>
                        </tr>
                     ';
                }
                return $tableHead . $tableBody . $tableFooter . $pdfPrint;

                break;

            case 3:

                $result = Product::whereMonth('created_at', date('m'))->get();

                $counter = 1;

                foreach ($result as $value) {
                    $dataOfRoprt['arabic_name'] = $value->arabic_name;
                    $dataOfRoprt['english_name'] = $value->english_name;
                    $dataOfRoprt['arabic_discrption'] = $value->arabic_discrption;
                    $dataOfRoprt['english_discrption'] = $value->english_discrption;
                    $dataOfRoprt['imge_url'] = $value->imge_url;


                    $dataOfRoprt['classfcation'] = $value->productclassification->calssfcation_type;
                    $tableBody .= '<tr>
                      <td class="text regular">' . $counter++ . '</td>
                          <td>' . $dataOfRoprt['arabic_name'] . '</td>
                          <td>' . $dataOfRoprt['english_name'] . '</td>
                          <td>' . $dataOfRoprt['arabic_discrption'] . '</td>
                          <td>' . $dataOfRoprt['english_discrption'] . '</td>
                          <td> <img src="' . $dataOfRoprt['imge_url'] . '"
                          style="width:177px;hight:167px/></td>


                          <td>
                              <div class="badge bg-success" >' . $dataOfRoprt['classfcation'] . '</div>
                            </div>
                          </td>
                        </tr>
                     ';
                }
                return $tableHead . $tableBody . $tableFooter . $pdfPrint;
                # ...
                break;

            case 4:

                $result = Product::whereYear('created_at', date('Y'))->get();

                $counter = 1;
                foreach ($result as $value) {
                    $dataOfRoprt['arabic_name'] = $value->arabic_name;
                    $dataOfRoprt['english_name'] = $value->english_name;
                    $dataOfRoprt['arabic_discrption'] = $value->arabic_discrption;
                    $dataOfRoprt['english_discrption'] = $value->english_discrption;
                    $dataOfRoprt['imge_url'] = $value->imge_url;


                    $dataOfRoprt['classfcation'] = $value->productclassification->calssfcation_type;
                    $tableBody .= '<tr>
                      <td class="text regular">' . $counter++ . '</td>
                          <td>' . $dataOfRoprt['arabic_name'] . '</td>
                          <td>' . $dataOfRoprt['english_name'] . '</td>
                          <td>' . $dataOfRoprt['arabic_discrption'] . '</td>
                          <td>' . $dataOfRoprt['english_discrption'] . '</td>
                          <td> <img src="' . $dataOfRoprt['imge_url'] . '"
                          style="width:177px;hight:167px/></td>


                          <td>
                              <div class="badge bg-success" >' . $dataOfRoprt['classfcation'] . '</div>
                            </div>
                          </td>
                        </tr>
                     ';
                }

             return $tableHead . $tableBody . $tableFooter . $pdfPrint;
                    break;
        }


    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    function edit(Request $request, $id)
    {
        //
        //$where = array('id' => $id);
        $user = Product::where('id', $id)->first();
        return json_encode($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $name = $request->input('arabic_name');
        $english_name = $request->input('english_name');

        

      //  $dis = $request->input('dis');
        $editid = $request->input('user_id');


            $data = array('arabic_name' => $name, "english_name" => $english_name,'arabic_discrption'=> $request->input('arabic_discrption'),'english__discrption'=> $request->input('english__discrption'));
            // Call updateData() method of Page Model
            $user = Product::where('id', $editid)->update($data);
            return json_encode('تم التعديل');
        
    }


    // Update record
    public function updateItem(Request $request)
    {

        
        $name = $request->input('arabic_name');
        $english_name = $request->input('english_name');
                   /* $the_imge = time() . '.' . $image->getClientOriginalExtension();
                 $destinationPath = public_path('/images');
                 $employee = Product::find($id);
                 $file_old = $path.$employee->imge_url;
                 unlink($file_old);
                 $image = $request->file('imge_url');
                 $image->move($destinationPath, $the_imge); */
                
                 $data = array('arabic_name' => $name, "english_name" => $english_name,'arabic_discrption'=> $request->input('arabic_discrption'),'english__discrption'=> $request->input('english__discrption'));
           // Call updateData() method of Page Model
           $user = Product::where('id', $request->input('user_id'))->update($data);
           return json_encode('تم التعديل');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = Product::where('id', $id)->delete();
        return json_encode($user);
    }
}

