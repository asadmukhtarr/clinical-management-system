<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    //
    public function specialities(){
        return $this->belongsTo(specialities::class);
    }
}
