<?php

use Illuminate\Database\Eloquent;

class Order extends Eloquent\Model
{
    protected $fillable = [
        'id',
        'chat_id',
        'price',
        'user_id'
    ];

    public function getUserOrdersCount($user_id)
    {

    }
}