<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //----Q9------
    public function images()
    {
        return $this->belongsToMany('App\Image', 'student_id', 'image_id');
    }
    
    //----Q11------
    public function detentions()
    {
        return $this->hasMany('App\Detention');
    }
}
