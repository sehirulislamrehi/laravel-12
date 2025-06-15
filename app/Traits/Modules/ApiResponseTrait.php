<?php

namespace App\Traits\Modules;

use Illuminate\Http\JsonResponse;

trait ApiResponseTrait
{


     protected function response($status, $data = [], $message, $tableName = null, $code = 200, $locationReload = null, $url = null): JsonResponse
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
