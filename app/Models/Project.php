<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function client()
    {
        return $this->belongsTo('Client');
    }

    public function budgets()
    {
        return $this->hasMany('Budget');
    }

    public function receivables()
    {
        return $this->hasMany('Receivable');
    }

}
