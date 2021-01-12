<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function calculator(Request $request)
    {
        $data = $request->all();

        $number = (int) $data['number'];

        $sum = 0;

        for($i = 1; $i < $number; $i++){
            $result = $i / 3;

            if (is_int($result)){
                $sum = $sum + $i;
            }else{
                $result = $i / 5;
                if(is_int($result)){
                    $sum = $sum + $i;
                }    
            }           
        }
        return Response()->json([
            'sucess' => true,
            'error' => false,
            'sum' => $sum
        ], 200);
    }
}
