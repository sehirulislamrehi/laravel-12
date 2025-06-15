<?php

namespace App\Services\Backend\Modules\UserModule\Auth;

use App\Interfaces\Modules\UserModule\User\ReadUserInterface;
use Illuminate\Database\Eloquent\Collection;

class LoginServie
{

     public function __construct(
          protected ReadUserInterface $readUserRepository
     ) {}

     public function getUserByEmail($email)
     {
          return $this->readUserRepository->getUserByEmail($email);
     }

     public function doLogin($request): bool
     {
          return auth('web')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true);
     }
}
