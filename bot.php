<?php

require_once 'configs/telegram.php';
use SergiX44\Nutgram\Nutgram;

$bot = new Nutgram(TOKEN);

$settings = new Settings();

$bot->run();



