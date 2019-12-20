<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'selectgoal' => 'required',
        'datelog' => 'required',
        'bodylog' => 'required',
        );
        
        public function users()
    {
        return $this->belongsTo('App\User');
    }
            public function goals()
    {
        return $this->belongsTo('App\Goal');
    }
}
