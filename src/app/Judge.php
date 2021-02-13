<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
	protected $fillable = [
        'name'
    ];
    public function CaseHiring(){
    	return $this->hasMany(Case_hiring::class,'judge_id','id');
    }
}
