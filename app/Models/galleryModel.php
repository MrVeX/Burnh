<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class galleryModel extends Model
{
    public function portfolio(){
        return $this->belongsTo('App\Models\portfolioModel');
    }
}
