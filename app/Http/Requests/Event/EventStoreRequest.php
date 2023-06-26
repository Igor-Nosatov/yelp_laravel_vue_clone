<?php
declare(strict_types=1);

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=> ['required', 'string', 'min:3', 'max:500'],
            'description'=> ['required', 'string', 'min:3', 'max:5000'],
            'start_time'=> ['required', 'string', 'min:3', 'max:500'],
            'end_time'=> ['required', 'string', 'min:3', 'max:500'],
            'location'=> ['required', 'string', 'min:3', 'max:500'],
            'image'=> ['required', 'string', 'min:3', 'max:500'],
            'url'=> ['required', 'string', 'min:3', 'max:500'],
            'user_id' => ['exists:users,id'],
        ];
    }
}
