<?php

use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Eloquent\Model
{
    protected $fillable = [
        'id',
        'chat_id',
        'price',
        'user_id'
    ];

    public function getOrderer (): HasOne
    {
        return $this->hasOne('users', 'chat_id', 'chat_id');
    }
}