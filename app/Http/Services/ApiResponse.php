<?php

namespace App\Http\Services;


use Illuminate\Http\JsonResponse;

class ApiResponse
{
    /**
     * @param object|array|null $object
     * @param string $message
     * @param int $code
     * @param bool $access_token
     * @return JsonResponse
     */
    public function success(object|array $object = null, string $message = 'OK',
                            int $code = 200, bool $access_token = true) : JsonResponse
    {
        return response()->json(array(
            'access_token' => $access_token ? auth()->refresh() : null,
            'message' => $message,
            'object' => $object,
        ), $code);
    }

    /**
     * @param array $errors
     * @param int $code
     * @param bool $access_token
     * @return JsonResponse
     */
    public function error(array $errors, int $code, bool $access_token = true) : JsonResponse
    {
        return response()->json(array(
            'access_token' => $access_token ? auth()->refresh() : null,
            'errors' => $errors,
        ), $code);
    }

    /**
     * @param array $errors
     * @param int $code
     * @return JsonResponse
     */
    public function exceptToken(array $errors = [], int $code = 200) : JsonResponse
    {
        return response()->json(array(
            'errors' => $errors
        ), $code);
    }
}
