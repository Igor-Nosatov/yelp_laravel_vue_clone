<?php
declare(strict_types=1);

namespace App\Http\Requests\Business;

use Illuminate\Foundation\Http\FormRequest;

class BusinessUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:500'],
            'price_level' => ['required', 'string','min:3', 'max:50'],
            'address'=> ['required', 'string', 'min:3', 'max:500'],
            'city'=> ['required', 'string', 'min:3', 'max:500'],
            'state'=> [ 'string', 'min:3', 'max:500'],
            'postal_code'=> ['required', 'string', 'min:3', 'max:500'],
            'country'=> ['required', 'string', 'min:3', 'max:500'],
            'phone'=> ['required', 'string', 'min:3', 'max:500'],
            'email' => ['required', 'string', 'min:3', 'max:500'],
            'website' =>['required',  'string', 'min:3', 'max:500'],
            'description' => ['required', 'string', 'min:100', 'max:5000'],
            'latitude'=> ['required', 'string', 'min:3', 'max:500'],
            'longitude'=> ['required', 'string', 'min:3', 'max:500'],
        ];
    }
}
