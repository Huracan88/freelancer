<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receivable extends Model
{

    public function project()
    {
        return $this->belongsTo('Project');
    }

    public function budget()
    {
        return $this->belongsTo('Budget');
    }

}
