<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\UserRegisterRequest;
use App\Repositories\Auth\AuthInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
class AuthController  extends BaseController
{
    private $authRepository;

    public function __construct(AuthInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login(LoginRequest $request)
    {
        $data = $this->authRepository->login($request->email, $request->password);
        if (!$data) {
            return response([
                'message' => 'incorrect username or password',
                'data' => null,
                'status' => JsonResponse::HTTP_UNAUTHORIZED
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        return response([
            'message' => 'User login success',
            'data' => $data,
            'status' => JsonResponse::HTTP_CREATED
        ], JsonResponse::HTTP_CREATED);
    }

    public function signUp(UserRegisterRequest $request)
    {
        return response()->json([
            'message' => 'User register success',
            'data' => $this->authRepository->signUp($request),
            'status' => JsonResponse::HTTP_CREATED
        ], JsonResponse::HTTP_CREATED);
    }

}

