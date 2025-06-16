<?php
declare(strict_types=1);

namespace App\Traits\Modules;

use Illuminate\Http\JsonResponse;

trait ApiResponseTrait
{


     protected function response(
          string $status, 
          array $data = [], 
          string $message = '', 
          string $tableName = '', 
          int $code = 200, 
          bool $locationReload = false, 
          string $url = ''
     ): JsonResponse
     {
          return response()->json(
               [
                    'status' => $status,
                    'message' => $message,
                    'data' => $data,
                    'tableName' => $tableName,
                    'locationReload' => $locationReload,
                    'url' => $url,
               ],
               $code
          );
     }


}
