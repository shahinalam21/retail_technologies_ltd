<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function BrandData(){
        $brand_data = Brand::all();
        return ResponseHelper::Out('Brand Data fetched Successfully','success',$brand_data,200);
    }
}
