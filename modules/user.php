<?php

use SergiX44\Nutgram\Nutgram;
use template\Template;

$bot->onCommand('start', function(Nutgram $bot) {
    User::create([
        'chat_id' => $bot->chatId(),
        'username' => $bot->user()->username
    ]);

    $template = new Template('user/menu/start');
    $bot->sendMessage($template->text);
});

$bot->onCommand('create_order', function(Nutgram $bot) {
    $user = User::findOne('chat_id', $bot->chatId());

    Order::create([
        'chat_id' => $bot->chatId(),
        'user_id' => $user->id,
        'status' => '-1'
    ]);

    $template = new Template('user/menu/create_order');
    $bot->sendMessage($template->text);
});

$bot->onCommand('get_free_orders', function(Nutgram $bot) {
    $template = new Template('user/menu/get_free_orders');
    $bot->sendMessage($template->text);
});

$bot->onCommand('franchise', function(Nutgram $bot) {
    $template = new Template('user/menu/franchise');
    $bot->sendMessage($template->text);
});

$bot->onCommand('contacts', function(Nutgram $bot) {
    $template = new Template('user/menu/contacts');
    $bot->sendMessage($template->text);
});

$bot->onCommand('lc', function(Nutgram $bot) {
    $template = new Template('user/menu/lc');
    $bot->sendMessage($template->text);
});

$bot->onCommand('about', function(Nutgram $bot) {
    $template = new Template('user/menu/about');
    $bot->sendMessage($template->text);
});


