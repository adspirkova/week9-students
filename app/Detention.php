<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detention extends Model
{
    //----Q11------
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
