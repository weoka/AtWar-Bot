<?php

use Discord\Discord;
use Discord\Parts\Channel\Message;
use Psr\Http\Message\ResponseInterface;
use React\EventLoop\Factory;
use React\Http\Browser;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

$loop = Factory::create();

$browser = new Browser($loop);

$discord = new Discord([
    'token' => $token,
    'loop' => $loop,
]);

?>