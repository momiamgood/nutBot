<?php

use SergiX44\Nutgram\Nutgram;
use template\Template;


$bot->onCommand('get_geo', function(Nutgram $bot) {
    $template = new Template('user/menu/get_geo');
    $bot->sendMessage($template->text, $bot->chatId());
});

$bot->onCommand('get_address', function(Nutgram $bot) {
    $template = new Template('user/menu/get_address');
    $bot->sendMessage($template->text, $bot->chatId());
});

$bot->onCommand('get_whatsapp', function(Nutgram $bot) {
    $template = new Template('user/menu/get_whatsapp');
    $bot->sendMessage($template->text, $bot->chatId());
});

$bot->onCommand('get_number', function(Nutgram $bot) {
    $template = new Template('user/menu/get_whatsapp');
    $bot->sendMessage($template->text, $bot->chatId());
});

$bot->onCommand('end_order', function(Nutgram $bot) {
    $template = new Template('user/menu/end_order');
    $bot->sendMessage($template->text, $bot->chatId());
});


