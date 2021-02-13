<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case_hiring extends Model
{
    public function kase(){
    	return $this->belongsTo(Kase::class,'kase_id','id');
    }
    public function court(){
    	return $this->belongsTo(Court::class,'court_id','id');
    }
    public function type(){
    	return $this->belongsTo(Hiring_type::class,'hiring_type','id');
    }
    public function judge(){
    	return $this->belongsTo(Judge::class,'judge_id','id');
    }
}
