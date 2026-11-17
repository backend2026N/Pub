<?php

namespace App\traits;

use Illuminate\Http\JsonResponse;

trait ResponseHandler {
    
    public function sendResponse( mixed $data, string $message = "", int $code = 200 ) {

        $response = [

            "success" => true,
            "data" => $data,
            "message" => $message,
        ];

        return response()->json( $response, $code );
    }
}
