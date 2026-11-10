<?php

namespace App\traits;

use Illuminate\Http\JsonResponse;

trait ResponseHandler {
    
    public function sendResponse( Object $data, string $message = "", int $code = 200 ) {

        $response = [

            "success" => true,
            "data" => $data,
            "message" => $message,
        ];

        return response()->json([ $response, $code ]);
    }
}
