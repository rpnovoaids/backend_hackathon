<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Security\UserResource;
use App\Http\Services\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    protected ApiResponse $response;

    /**
     * @param ApiResponse $apiResponse
     */
    public function __construct(ApiResponse $apiResponse)
    {
        $this->middleware('auth:api', ['except' => ['authenticate']]);
        $this->response = $apiResponse;
    }

    /**
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function authenticate(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only('username', 'password');
        $validator = Validator::make($credentials, [
            'username' => 'required',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Campos inválidos.'], 222);
        } else {
            try {
                // Intente verificar las credenciales y crear un token para el usuario
                if (!$token = auth()->attempt($credentials)) {
                    return response()->json(['errors' => [], 'message' => 'Las credenciales proporcionadas no coinciden con nuestros registros.'], 401);
                } else {
                    // Todo bien así que devuelve el token.
                    $user = auth()->user();
                    if ($user->active and $user->state) {
                        return response()->json($this->respondWithToken($token));
                    } else {
                        return response()->json(['errors' => [], 'message' => 'Su Cuenta se Encuentra Bloqueado, comuníquese con el Administrador del Sistema.'], 401);
                    }
                }
            } catch (JWTException $e) {
                // Algo salió mal con JWT Auth.
                return response()->json(['errors' => [], 'message' => 'Error al iniciar sesión, por favor intente de nuevo.'], 500);
            }
        }
    }


    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        return response()->json(new UserResource(auth()->user()));
    }

    /**
     * Log the User out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth()->logout();
        return response()->json(true);
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {
        $token = auth()->refresh();
        return response()->json(['access_token' => $token]);
    }

    /**
     * @param $token
     * @return array
     */
    protected function respondWithToken($token): array
    {
        return [
            'errors' => null,
            'message' => "Success",
            'object' => new UserResource(auth()->user()),
            'access_token' => $token,
            'expires_in' => auth()->factory()->getTTL() * 60
        ];
    }
}
