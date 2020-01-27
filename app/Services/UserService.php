<?php

namespace App\Services;

class UserService
{
   public function handleUserLogin()
   {
        $this->updatedUserLastSeen();
        $this->updatedActivityTime();
   }

   private function updatedUserLastSeen()
   {
        $now = now();
        logger("User last seen {$now}");
   }

   private function updatedActivityTime()
   {
        $now = now();
        logger("User last activity was at {$now}");
   }
}