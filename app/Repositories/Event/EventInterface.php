<?php

declare(strict_types=1);

namespace App\Repositories\Event;

use App\Http\Requests\Event\EventStoreRequest;
use App\Http\Requests\Event\EventUpdateRequest;
use App\Models\Event;

interface EventInterface
{
    public function getAll(): mixed;
    public function getById(Event $event): ?array;
    public function store(EventStoreRequest $request):  ? array;
    public function update(EventUpdateRequest $request, Event $event) : ?bool;
    public function delete(Event $event): ?bool;
}
