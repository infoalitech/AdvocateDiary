<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hiring_type extends Model
{
	protected $guarded = [
        'id',
    ];
    public function CaseHiring(){
    	return $this->hasMany(Case_hiring::class,'hiring_type','id');
    }
}
