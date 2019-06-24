<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'first_approval', 'second_approval'
    ];

    public function firstUser()
    {
        return $this->belongsTo('App\User', 'first_user', 'id');
    }

    public function secondUser()
    {
        return $this->belongsTo('App\User', 'second_user', 'id');
    }

    public function firstItem()
    {
        return $this->belongsTo('App\Item', 'first_item', 'id');
    }

    public function secondItem()
    {
        return $this->belongsTo('App\Item', 'second_item', 'id');
    }
}
