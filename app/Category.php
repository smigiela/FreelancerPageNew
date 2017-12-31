<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        /**
     * The table associated with the model.
     *
     */
    protected $table = 'categories';

    public function Post(){
        return $this->hasMany('App\Post');
    }
}
