<?php

namespace App\Services\MessageService;


interface SendMessageInterface
{
    public function sendMessage($user, $message);

}