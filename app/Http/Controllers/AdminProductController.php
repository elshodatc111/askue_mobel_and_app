<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Company,CompanyItem,Order};
use App\Http\Requests\StoreCompanyItemRequest;

class AdminProductController extends Controller{
    public function index(){
        $company = Company::where('status','true')->get();
        $CompanyItem = CompanyItem::where('status',true)->get();
        $res = [];
        foreach ($CompanyItem as $key => $value) {
            $res[$key]['id'] = $value->id;
            $res[$key]['company_name'] = Company::find($value->company_id)->company_name;
            $res[$key]['name'] = $value->name;
            $res[$key]['price'] = $value->price;
        }
        return view('admin.product.index',compact('res','company'));
    }

    public function store(StoreCompanyItemRequest $request){
        $validated = $request->validated();
        CompanyItem::create([
            'company_id' => $request->company_id,
            'name' => $request->name,
            'price' => str_replace(' ','',$request->price),
            'status' => true,
        ]);
        return redirect()->back()->with('success', 'Yangi maxsulot qo\'shildi!');
    }


}
