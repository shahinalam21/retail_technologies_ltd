<?php
namespace App\Helper;
use Illuminate\Http\JsonResponse;

class ResponseHelper{
    public static function Out($msg,$status,$data,$code){
        return response()->json([
            'msg' => $msg,
            'status' => $status,
            'data' => $data
        ],$code);
    }
}
