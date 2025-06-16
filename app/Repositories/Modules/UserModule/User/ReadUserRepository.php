<?php
declare(strict_types=1);

namespace App\Repositories\Modules\UserModule\User;

use App\Interfaces\Modules\UserModule\User\ReadUserInterface;
use App\Models\UserModule\User;

class ReadUserRepository implements ReadUserInterface{

     /**
      * Get user by email.
      *
      * @param string $email
      * @return User|null
      */
     public function getUserByEmail(string $email): ?User
     {
          return User::where('email', $email)->first();
     }
}