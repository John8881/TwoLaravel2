<?php

namespace App\Services\MessageService;

class SendMessageEmail implements SendMessageInterface
{
    public function sendMessage($user, $message)
    {
        logger("User says {$message} to {$user} through Email. ");
    }
}