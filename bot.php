<?php

require_once 'configs/telegram.php';

use SergiX44\Nutgram\Nutgram;

$bot = new Nutgram(token);

$settings = new Settings();

$bot->run();

$bot->sendMessage('text_connect', $bot->chatId());



