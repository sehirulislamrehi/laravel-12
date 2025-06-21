<?php

namespace App\Repositories\Modules\UserModule\User;

use App\Interfaces\Modules\UserModule\User\WriteUserInterface;
use App\Models\UserModule\User;

class WriteUserRepository implements WriteUserInterface
{

     public function createUser(array $data): User
     {
          return User::create($data);
     }

     public function updateUser($user, array $data): User
     {
          $user->update($data);
          return $user;
     }

     public function resetPassword(User $user, array $data): bool
     {
          $user->password = $data['password'];
          return $user->save();
     }
}