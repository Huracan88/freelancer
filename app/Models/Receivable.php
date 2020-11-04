<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receivable extends Model
{

    protected $dates = [
        'date',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

}
