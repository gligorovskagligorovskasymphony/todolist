<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = ['name', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
