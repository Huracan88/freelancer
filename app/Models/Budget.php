<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{

    public function concepts()
    {
        return $this->hasMany('Concept');
    }

    public function receivables()
    {
        return $this->hasMany('Receivable');
    }


    public function project()
    {
        return $this->belongsTo('Project');
    }

    public function parentBudget()
    {
        return $this->belongsTo('Budget');
    }

}
