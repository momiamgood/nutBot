<?php

use Illuminate\Database\Eloquent;

class User extends Eloquent\Model {
    protected $fillable = [
        'username',
        'chat_id',
        'amount_orders',
        'last_geo'];

    public function getUserOrdersCount ($user_id): Eloquent\Relations\HasMany
    {
        return User::hasMany('orders', 'chat_id', 'chat_id');
    }
}