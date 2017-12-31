<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        /**
     * The table associated with the model.
     *
     */
    protected $table = 'comments';

    
    public function Post(){
        return $this->belongsTo('App\Post');
    }
}
