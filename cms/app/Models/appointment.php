<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    //
    public function patient(){
        return $this->belongsTo(patient::class);
    }
    public function doctor(){
        return $this->belongsTo(doctor::class);
    }
}
