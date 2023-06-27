<?php

namespace App\Http\Controllers;

use App\Http\Requests\Event\EventStoreRequest;
use App\Http\Requests\Event\EventUpdateRequest;
use App\Models\Event;
use App\Repositories\Event\EventInterface;
use Illuminate\Http\JsonResponse;

class EventController extends BaseController
{
    private $eventRepository;

    public function __construct(EventInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
     * Get all events.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $response = $this->eventRepository->getAll();
        return $this->successResponse(
            $response,
            'get events successfully'
        );
    }

    /**
     * Create a new event.
     *
     * @param \App\Http\Requests\Event\EventStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(EventStoreRequest $request): JsonResponse
    {
        $response = $this->eventRepository->store($request);
        return $this->successResponse($response, 'create new event successfully');
    }

    /**
     * Get a specific event by ID.
     *
     * @param \App\Models\Event $event
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Event $event): JsonResponse
    {
        $response = $this->eventRepository->getById($event);
        return $this->successUpdateResponse($response, 'get event by ID successfully');
    }

    /**
     * Update an event.
     *
     * @param \App\Http\Requests\Event\EventUpdateRequest $request
     * @param \App\Models\Event $event
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EventUpdateRequest $request, Event $event): JsonResponse
    {
        $response = $this->eventRepository->update($request, $event);
        return $this->updateSuccessResponse($response, 'update event successfully');
    }

    /**
     * Delete an event.
     *
     * @param \App\Models\Event $event
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Event $event): JsonResponse
    {
        $this->eventRepository->delete($event);
        return $this->deleteSuccessResponse('deleted successfully');
    }
}
