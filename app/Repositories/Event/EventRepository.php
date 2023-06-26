<?php

declare(strict_types=1);

namespace App\Repositories\Event;

use App\Http\Requests\Event\EventStoreRequest;
use App\Http\Requests\Event\EventUpdateRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventRepository implements EventInterface
{
    public function getAll(): mixed
    {
      return Event::where('user_id',Auth::id())->get()->toArray();
    }

    public function getById(Event $event): ?array
    {
        return Event::find($event)->toArray();
    }
    public function store(EventStoreRequest $request):  ? array
    {
        $event = Event::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'location'=>$request->location,
            'image'=>$request->image,
            'url'=>$request->url,
            'user_id'=> Auth::id(),
        ]);
        return  $event;
    }

    public function update(EventUpdateRequest $request, Event $event) : ?bool
    {
        $event = Event::find($event);
        $event->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'location'=>$request->location,
            'image'=>$request->image,
            'url'=>$request->url,
        ], ['user_id' => false]);
        return true;
    }

    public function delete(Event $event): ?bool
    {
        $event = Event::find($event);
        $event->delete();
        return true;
    }
}
