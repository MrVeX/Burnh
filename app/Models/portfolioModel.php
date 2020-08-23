<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolioModel extends Model
{
    public function gallery ()
    {
        return $this->hasMany('App\Models\galleryModel');
    }
}
