<?php

namespace App\Services\Backend\Modules\UserModule\User;

use App\Interfaces\Modules\UserModule\User\ReadUserInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserService{

     public function __construct(
          protected ReadUserInterface $readUserRepository,
     )
     {
         // You can add any initialization code here if needed
     }

     /**
      * Get user by email.
      *
      * @param string $email
      * @return User|null
      */
     public function getAllUserForAdminDataTable(Request $request): Builder
     {
          return $this->readUserRepository->getAllUserForAdminDataTable($request);
     }


     public function createUser(){
          
     }
}