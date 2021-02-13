<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lawyer extends Model
{
	protected $fillable = [
        'name','user_id'
    ];
    public function kase(){
    	return $this->hasMany(Kase::class,'lawyer_id','id');
    }
    public function user(){
    	return $this->belongsTo(User::class,'user_id','id');
    }
    public function OfficialActivity(){
    	return $this->hasMany(Official_activite::class,'lawyer_id','id');
    }
    public function clients(){
        return $this->hasMany(Client::class,'lawyer_id','id');
    }
}
