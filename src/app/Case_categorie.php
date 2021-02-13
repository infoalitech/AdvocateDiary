<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case_categorie extends Model
{
	protected $fillable = [
        'name'
    ];
    public function kase(){
    	return $this->hasMany(Kase::class,'category_id','id');
    }
}
