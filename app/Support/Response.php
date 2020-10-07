<?php


namespace App\Support;


class Response
{

    public static function json($version,$code,$message,$data){
        return response()->json([
            'version'=>$version,
            'code'=>$code,
            'message'=>$message,
            'data'=>$data
        ]);
    }

}
