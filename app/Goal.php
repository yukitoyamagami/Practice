<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'selectgoal' => 'required',
        'title' => 'required',
        'body' => 'required',
        'date' => 'required',
    );
    
            public function users()
    {
        return $this->belongsTo('App\User');
    }
        public function logs()
    {
        return $this->hasMany('App\Log');
    }
}
