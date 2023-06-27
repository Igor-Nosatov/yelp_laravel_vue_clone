<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\LengthAwarePaginator;

class BaseController extends Controller
{
    /**
     * Create a JSON response.
     *
     * @param array $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    protected function createResponse(array $data, string $message, int $status = JsonResponse::HTTP_CREATED): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => $status, 'data' => $data]);
    }

    /**
     * Create a success JSON response with pagination.
     *
     * @param mixed $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
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
                'data' => $data->toArray()['data']
            ]);
        }
    }

    /**
     * Create a success JSON response.
     *
     * @param array $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    protected function successResponse(array $data, string $message, int $status = JsonResponse::HTTP_OK): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => $status, 'data' => $data]);
    }

    /**
     * Create a success JSON response for delete operation.
     *
     * @param string $message
     * @return JsonResponse
     */
    protected function deleteSuccessResponse(string $message): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => JsonResponse::HTTP_NO_CONTENT]);
    }

    /**
     * Create a success JSON response for update operation.
     *
     * @param array $data
     * @param string $message
     * @return JsonResponse
     */
    protected function updateSuccessResponse(array $data, string $message): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => JsonResponse::HTTP_OK, 'data' => $data]);
    }

    /**
     * Create an error JSON response.
     *
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    protected function errorResponse(string $message, int $status = JsonResponse::HTTP_BAD_REQUEST): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => $status]);
    }

    /**
     * Create a JSON response for an exception.
     *
     * @param \Throwable $exception
     * @param int $status
     * @return JsonResponse
     */
    protected function exceptionResponse(\Throwable $exception, int $status = JsonResponse::HTTP_INTERNAL_SERVER_ERROR): JsonResponse
    {
        $message = $exception->getMessage();
        $trace = config('app.debug') ? $exception->getTrace() : [];
        return new JsonResponse(['message' => $message, 'status' => $status, 'trace' => $trace]);
    }
}
