<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\services\TypeService;
use App\traits\ResponseHandler;

class TypeController extends Controller {
    
    use ResponseHandler;

    public function __construct( protected TypeService $typeService ) {}

    public function getTypes() {

        $types = $this->typeService->getTypes();

        return $this->sendResponse( $types );
    }
}
