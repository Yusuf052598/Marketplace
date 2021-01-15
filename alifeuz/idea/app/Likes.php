<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1, $auth)
 */
class Likes extends Model
{
    protected $fillable=[
        'users_id','news_id','likes'
    ];
    public function news()
    {
        return $this->belongsTo(News::class);
    }

}
