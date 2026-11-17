<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model {
    
    protected $fillable = [
        "name",
        "amount",
        "price",
        "type_id",
        "package_id",
    ];

    public function package() {

        return $this->belongsTo( Package::class );
    }

    public function type() {

        return $this->belongsTo( Type::class );
    }
}
