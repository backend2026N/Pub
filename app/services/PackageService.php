<?php

namespace App\services;

use App\Models\Package;

class PackageService {

    public function __construct() {}

    public function getPackages() {

        $packages = Package::all();

        return $packages;
    }

    public function getId( string $name ): int {

        $package = Package::where( "package", $name )->first();

        return $package->id;
    }
}