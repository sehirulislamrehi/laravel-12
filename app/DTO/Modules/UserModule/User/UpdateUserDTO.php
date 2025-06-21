<?php

namespace App\DTO\Modules\UserModule\User;

use App\Http\Requests\Backend\UserModule\User\UpdateUserRequest;
use Carbon\Carbon;

class UpdateUserDTO
{

     /**
      * CreateUserDTO constructor.
      *
      * @param string $name
      * @param string $email
      * @param string $phone
      * @param string $roleId
      * @param bool $isActive
      */
     public function __construct(
          public string $name,
          public string $email,
          public string $phone,
          public string $roleId,
          public bool $isActive,
     ) {}

     /**
      * Create a new instance from the request.
      *
      * @param CreateUserRequest $request
      * @return self
      */
     public static function fromRequest(UpdateUserRequest $request): self
     {
          return new self(
               name: $request->input('name'),
               email: $request->input('email'),
               phone: $request->input('phone'),
               roleId: (int) $request->input('role_id'),
               isActive: (bool) $request->input('is_active', false),
          );
     }

     /**
      * Convert the DTO to an array representation.
      *
      * @return array
      */
     public function toArray(): array
     {
          return [
               'name' => $this->name,
               'email' => $this->email,
               'phone' => $this->phone,
               'role_id' => $this->roleId,
               'is_active' => $this->isActive,
               'updated_at' => Carbon::now(),
          ];
     }
}
