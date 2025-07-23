<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Company,CompanyItem,Order};
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\{StoreCompanyRequest};

class AdminCompanyController extends Controller{

    public function index(){
        $Company = Company::where('status','true')->get();
        $res = [];
        foreach ($Company as $key => $value) {
            $res[$key]['id'] = $value->id;
            $res[$key]['company_name'] = $value->company_name;
            $res[$key]['start'] = $value->start."(".$value->start_count.")";
            $res[$key]['count_order'] = count(CompanyItem::where('company_id',$value->id)->where('status',1)->get());
            $res[$key]['active_order'] = count(Order::where('status','new')->get());
            $res[$key]['price'] = $value->price;
            $res[$key]['balans'] = $value->balans;
            $res[$key]['paymart'] = $value->paymart;
        }
        return view('admin.company.index',compact('res'));
    }

    public function store(StoreCompanyRequest $request){
        $image = $request->file('logo_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $savedImageName = $imageName;
        Company::create([
            'company_name' => $request->company_name,
            'phone' => $request->phone,
            'description' => $request->description,
            'logo_image' => $savedImageName,
            'address' => $request->address,
            'price' => intval(str_replace(" ","",$request->price)),
            'balans' => 0,
            'paymart' => intval(str_replace(" ","",$request->paymart)),
            'start' => 5,
            'start_count' => 0,
            'status' =>'true',
        ]);
        return redirect()->back()->with('success', 'Yangi ferma qo\'shildi!');
    }

}
