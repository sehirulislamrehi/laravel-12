<?php

namespace App\Services\Backend\Modules\UserModule\Auth;

use App\Http\Requests\Backend\UserModule\Auth\LoginRequest;
use App\Interfaces\Modules\UserModule\User\ReadUserInterface;
use App\Models\User;

class LoginServie
{

     public function __construct(
          protected ReadUserInterface $readUserRepository
     ) {}

     public function getUserByEmail(string $email): ?User
     {
          return $this->readUserRepository->getUserByEmail($email);
     }

     public function doLogin(LoginRequest $request): bool
     {
          return auth('web')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true);
     }
}
