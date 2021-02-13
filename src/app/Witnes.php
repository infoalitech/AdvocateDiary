<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Witnes extends Model
{
	protected $guarded = [
        'id',
    ];
    public function kase(){
    	return $this->belongsTo(Kase::class,'kase_id','id');
    }
}
