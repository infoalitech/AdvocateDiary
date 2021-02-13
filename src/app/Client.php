<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $fillable = [
		'name','phone','cell','address','lawyer_id'
	];
    public function kase(){
    	return $this->hasMany(Kase::class,'client_id','id');
    }
    public function lawyer(){
    	return $this->belongsTo(Lawyer::class,'lawyer_id','id');
    }
    public function user(){

         return $this->belongsTo(User::class,'users_id','id');
    }

    public function hasAcess($permit){
        foreach($this->permissions as $permission){
            if ($permission->name == $permit) {
                return true;
            }
        }
        foreach($this->groups as $group){
            foreach($group->permission as $permission){
                if ($permission->name == $permit) {
                    return true;
                }
            }
        }
        return false;
    }
    
}
