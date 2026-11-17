<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\services\PackageService;
use App\traits\ResponseHandler;

class PackageController extends Controller {
    
    use ResponseHandler;

    public function __construct( protected PackageService $packageService ) {}


    public function getPackages() {

        $packages = $this->packageService->getPackages();

        return $this->sendResponse( $packages );
    }
}
