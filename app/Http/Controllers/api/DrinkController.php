<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\services\ListDrinkService;
use App\traits\ResponseHandler;

class DrinkController extends Controller {
    
    use ResponseHandler;

    public function __construct( protected ListDrinkService $listDrinkService ) {}

    public function getDrinks() {

        $drinks = $this->listDrinkService->getDrinks();

        return $this->sendResponse( $drinks  );
    }
}
