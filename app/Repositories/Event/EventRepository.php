<?php

declare(strict_types=1);

namespace App\Repositories\Event;

use App\Http\Requests\Event\EventStoreRequest;
use App\Http\Requests\Event\EventUpdateRequest;
use App\Models\Event;

class EventRepository implements EventInterface
{
    public function create(EventStoreRequest $request):  ? array
    {
        return Event::create($request->validated());
    }

    public function update(EventUpdateRequest $request, Event $event) : bool
    {
        return $event->update($request->validated());
    }

    public function delete(Event $event): void
    {
        $event->delete();
    }
}
