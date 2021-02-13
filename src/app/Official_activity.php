<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Official_activity extends Model
{
    public function ActivityType(){
    	return $this->belongsTo(Activite_type::class,'types_id','id');
    }
    public function lawyer(){
    	return $this->belongsTo(Lawyer::class,'lawyer_id','id');
    }
}
