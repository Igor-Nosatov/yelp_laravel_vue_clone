<?php
declare(strict_types=1);

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:500'],
            'description' => ['required', 'string', 'min:100', 'max:5000'],
            'image' => ['required', 'string', 'min:100', 'max:500'],
            'user_id' => ['exists:users,id'],
            'topic_id' => ['exists:topics,id'],
        ];
    }
}
