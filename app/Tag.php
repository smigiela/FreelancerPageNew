<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     /**
     * The table associated with the model.
     *
     */
    protected $table = 'tags';

    public function Post(){
        return $this->belongsToMany('App\Post');
    }
}
