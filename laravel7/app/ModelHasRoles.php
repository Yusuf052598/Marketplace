<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHasRoles extends Model
{
    protected $fillable=[
        'id','role_id','model_type','model_id'
    ];
    public function role(){
        return $this->belongsTo(Roles::class);
    }
    public function model(){
        return $this->belongsTo(User::class);
    }

}
