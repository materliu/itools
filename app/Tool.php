<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Tool extends Model
{
    protected $table = 'tools';
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'title', 'description', 'logoURL', 'webURL', 'markdownFile', 'index'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'user_ids'
    ];

    public function users() {
        return $this->belongsToMany('App\user');
    }
}
