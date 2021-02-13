<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
	protected $guarded = [
        'id',
    ];
    public function CaseHiring(){
    	return $this->hasMany(Case_hiring::class,'court_id','id');
    }
}
