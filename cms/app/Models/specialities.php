<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class specialities extends Model
{
    //
    public function doctor(){
        return $this->hasMany(doctor::class);
    }
}
