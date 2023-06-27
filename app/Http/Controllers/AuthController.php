<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\UserRegisterRequest;
use App\Repositories\Auth\AuthInterface;
use Illuminate\Http\JsonResponse;

class AuthController extends BaseController
{
    private AuthInterface $authRepository;

    /**
     * AuthController constructor.
     *
     * @param AuthInterface $authRepository
     */
    public function __construct(AuthInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    /**
     * Process user login.
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $data = $this->authRepository->login($request->email, $request->password);

        if (!$data) {
            return response()->json([
                'message' => 'Incorrect username or password',
                'data' => null,
                'status' => JsonResponse::HTTP_UNAUTHORIZED
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        return response()->json([
            'message' => 'User login success',
            'data' => $data,
            'status' => JsonResponse::HTTP_CREATED
        ], JsonResponse::HTTP_CREATED);
    }

    /**
     * Process user registration.
     *
     * @param UserRegisterRequest $request
     * @return JsonResponse
     */
    public function signUp(UserRegisterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'User register success',
            'data' => $this->authRepository->signUp($request),
            'status' => JsonResponse::HTTP_CREATED
        ], JsonResponse::HTTP_CREATED);
    }
}
