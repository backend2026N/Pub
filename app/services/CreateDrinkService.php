<?php

namespace App\services;

use App\Models\Drink;

class CreateDrinkService {

    public function __construct( protected PackageService $packageService,
                                 protected TypeService $typeService ) {}

    public function createNewModel( array $validated ) {

        $drink = new Drink();
        $drink->name = $validated[ "name" ];
        $drink->amount = $validated[ "amount" ];
        $drink->price = $validated[ "price" ];
        $drink->type_id = $this->typeService->getId( $validated[ "type" ]);
        $drink->package_id = $this->packageService->getId( $validated[ "package" ]);
        
        $drink->save();

        return $drink;
    }

    public function drinkAutomaticCreate( $validated ) {

       return Drink::create( [

            "name" => "Ram",
            "amount" => 20,
            "price" => 250,
            "type_id" => 7,
            "package_id" => 5,
       ]);

 
    }
}