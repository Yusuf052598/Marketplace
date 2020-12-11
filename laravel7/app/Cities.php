<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $fillable = [
        'name','region_id'
    ];

    public function region()
    {
        return $this->belongsTo(Regions::class);
    }
}
