<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function kase(){
    	return $this->belongsTo(Kase::class,'kase_id','id');
    }
}
