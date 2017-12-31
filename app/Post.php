<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     */
    protected $table = 'posts';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug', 
        'body', 
        'image',
    ];

    /**
     * Relationships
     *
     */
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }

    public function Tag()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
