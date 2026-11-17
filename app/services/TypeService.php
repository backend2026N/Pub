<?php

namespace App\services;

use App\Models\Type;

class TypeService {

    public function __construct() {}

    public function getTypes() {

        $types = Type::all();

        return $types;
    }

    public function getId( string $name ): int {

        $type = Type::where( "type", $name )->first();

        return $type->id;
    }
}