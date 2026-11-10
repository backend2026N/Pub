<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {
    
    public $timestamps = false;

    public function drink(): HasMany {

        return $this->hasMany( Drink::class );
    }

}
