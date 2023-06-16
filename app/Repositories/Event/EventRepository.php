<?php

declare(strict_types=1);

namespace App\Repositories\Event;

use App\Models\Event;

class EventRepository implements EventInterface
{
    public function getAll(): array
    {
        return Event::latest()->paginate(12);
    }

    public function getById(int $id): ?array
    {
        return Event::find($id);
    }

    public function create(array $data): ?array
    {
        return Event::create($data);
    }

    public function update(int $id, array $data): bool
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): bool
    {
        $event = Event::find($id);
        $event->delete();
    }
}
