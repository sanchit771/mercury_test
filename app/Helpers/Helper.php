<?php

/** Global function toreturn response in JSON format */
function apiResponse($status,$message,$data=[])
{
    $successStatus = 200;
    $errorStatus = 400;

    /** Checking Status value */
    if($status == 'error'){
        return response()->json(["response" => Config::get('constants.error.status'),'data'=>$data,'status'=>Config::get('constants.error.error_code'),'message'=>Config::get('constants.error.'.$message)],$errorStatus);
    }else{
        return response()->json(["response" => Config::get('constants.success.status'),'data'=>$data,'status'=>Config::get('constants.success.success_code'),'message'=>Config::get('constants.success.'.$message)],$successStatus);
    }
}
