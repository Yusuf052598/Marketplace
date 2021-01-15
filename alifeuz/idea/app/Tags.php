<?php

namespace App;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable=[
        'news_id','tags','read_count'
    ];
    protected $casts=[
      'tags'=>'array'
    ];
    public function news(){
        return $this->belongsTo(News::class);
    }
     public function tags(){
        switch (App::getLocale())
        {
            case 'ru':
                return $this->tags['ru'];
                break;
            default:
                return $this->tags['uz'];

        }
    }
    public static function ReadCount($id)
    {
        $db=Tags::findOrFail($id);
        $k=$db->read_count+1;
        $db->update([
            'read_count'=>$k
        ]);
        return $db;

    }

}
