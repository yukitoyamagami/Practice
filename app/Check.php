<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'goal_id' => 'required',
        'datelog' => 'required',
        'selectdegree' => 'required',
        'bodyreason' => 'required',
        'bodygood' => 'required',
        'bodybad' => 'required',
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