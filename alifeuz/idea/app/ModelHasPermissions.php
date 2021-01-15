<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHasPermissions extends Model
{
    protected $fillable=[
        'id','permission_id','model_type','model_id'
    ];
    public function permission(){
        return $this->belongsTo(Permissions::class);
    }
    public function model(){
        return $this->belongsTo(User::class);
    }
}
