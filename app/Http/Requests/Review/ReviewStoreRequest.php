<?php

namespace App\Http\Requests\Review;

use Illuminate\Foundation\Http\FormRequest;

class ReviewStoreRequest extends FormRequest
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
            'rating' => ['required', 'string', 'min:3', 'max:500'],
            'content'=> ['required', 'string', 'min:10', 'max:5000'],
            'user_id'=> ['exists:users,id'],
            'business_id'=> ['exists:businesses,id'],
        ];
    }
}
