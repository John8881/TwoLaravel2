<?php

namespace App\Services\MessageService;

class SendMessageSMS implements SendMessageInterface
{
    public function sendMessage($user, $message)
    {
        logger("User says {$message} to {$user} through SMS. ");
    }
}