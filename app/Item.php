<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'user_id', 'name', 'details', 'images', 'isSold',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
