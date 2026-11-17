<?php

namespace App\services;

use App\Models\Drink;
use App\Http\Resources\DrinkResource;

class ListDrinkService {

    public function __construct() {}

    public function getDrinks() {

        $drinks = Drink::with( "type", "package" )->get();

        return DrinkResource::collection( $drinks );
    }

    public function getDrink( Drink $drink ) {

        $insDrink = $drink->load( "type", "package" );
        $oneDrink = ( new DrinkResource( $insDrink ));

        return $oneDrink; 
    }
}