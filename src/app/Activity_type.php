<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_type extends Model
{
	protected $fillable = [
        'name'
    ];
    public function officalActivity(){
    	return $this->hasMany(Official_activite::class,'types_id','id');
    }
}
