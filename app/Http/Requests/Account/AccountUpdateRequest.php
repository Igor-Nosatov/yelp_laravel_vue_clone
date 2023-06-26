<?php
declare(strict_types=1);

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class AccountUpdateRequest extends FormRequest
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
            'profile_image' => ['required', 'string', 'min:20', 'max:500'],
            'phone_number' => [ 'required','string', 'min:20', 'max:500'],
            'user_id' =>  ['exists:users,id'],
        ];
    }
}
