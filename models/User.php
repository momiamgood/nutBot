<?php

namespace models;

use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Eloquent\Model {
    protected $fillable = [
        'username',
        'chat_id',
        'amount_orders',
        'last_geo',
        'lang'
    ];

    public function getUserOrders (): HasMany
    {
        return $this->hasMany('orders', 'chat_id', 'chat_id');
    }
}