<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kase extends Model
{
    protected $guarded = [
        'id',
    ];

    public function bill(){
    	return $this->hasMany(Bill::class,'kase_id','id');
    }
    public function CaseHiring(){
    	return $this->hasMany(Case_hiring::class,'kase_id','id');
    }
    public function witnes(){
    	return $this->hasMany(Witnes::class,'kase_id','id');
    }
    public function CaseDocument(){
    	return $this->hasMany(Case_document::class,'kase_id','id');
    }
    public function CaseCategory(){
    	return $this->belongsTo(Case_categorie::class,'category_id','id');
    }
    public function client(){
        return $this->belongsTo(Client::class,'client_id','id');
    }
    public function hirings(){
        return $this->hasMany(Hiring::class,'case_id','id');
    }
}
