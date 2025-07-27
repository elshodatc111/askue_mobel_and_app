<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class HomeController extends Controller{
    public function index(){
        $companies = Company::where('status', 'true')
            ->orderBy('start', 'desc')
            ->get();
        $res = [];
        foreach ($companies as $key => $value) {
            $res[$key]['id'] = $value->id;
            $res[$key]['company_name'] = $value->company_name;
            $res[$key]['price'] = number_format($value->price, 0, '', ' ')." so'm";
            $res[$key]['start'] = $value->start."(".$value->start_count.")";
        }
        return response()->json([
            'company' => $res,
            'message' => "Barcha kompaniyalar"
        ]);
    }
}
