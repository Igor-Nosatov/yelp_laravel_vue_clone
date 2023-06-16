<?php

declare (strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\LengthAwarePaginator;

class BaseController extends Controller
{
    protected function createResponse(array $data, string $message, int $status = JsonResponse::HTTP_CREATED): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => $status, 'data' => $data]);
    }

    protected function successPaginationResponse($data, string $message, int $status = JsonResponse::HTTP_OK): JsonResponse
    {
        if ($data->isEmpty()) {
            return new JsonResponse([
                'message' => 'No data found',
                'status' => JsonResponse::HTTP_NO_CONTENT,
            ]);
        } else {

        $paginator = new LengthAwarePaginator(
            $data->items(),
            $data->total(),
            $data->perPage(),
            $data->currentPage(),
            ['path' => request()->url()]
        );
        return new JsonResponse([
            'message' => $message,
            'status' => $status,
            'meta' => [
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
                'per_page' => $paginator->perPage(),
                'total' => $paginator->total(),
            ],
            'data' => $data->toArray()['data']]);
        }
    }

    protected function successResponse(array $data, string $message, int $status = JsonResponse::HTTP_OK): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => $status, 'data' => $data]);
    }

}
