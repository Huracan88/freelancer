<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{

    public function budget(){
        return $this->belongsTo('Budget');
    }
}
