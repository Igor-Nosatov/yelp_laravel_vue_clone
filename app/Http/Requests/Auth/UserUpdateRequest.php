<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'first_name' => ['string', 'min:2', 'max:255'],
            'last_name' => ['string', 'min:2', 'max:255'],
            'phone_number' => ['string', 'regex:/^[\+]?1\s[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/'],
            'email' => ['email', 'max:255', 'unique:' . User::class],
            'password' => ['confirmed'],
            'birthday' => ['date'],
        ];
    }
}
