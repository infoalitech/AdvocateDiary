<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case_document extends Model
{
     public function kase(){
    	return $this->belongsTo(Kase::class,'kase_id','id');
    }
}
