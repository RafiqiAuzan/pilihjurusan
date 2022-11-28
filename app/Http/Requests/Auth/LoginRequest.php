<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        $this->merge([
            'phone_email' => str_replace('+', '', $this->phone_email)
        ]);
        if (filter_var($this->phone_email, FILTER_VALIDATE_EMAIL)) {

        }


    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $loginWith = filter_var($this->phone_email, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';
        $rule = [
            'email' => 'email:rfc,dns',
            'phone_number' => 'numeric|min_digits:10'
        ];
        return [
            'phone_email' => "required|$rule[$loginWith]",
            'password' => 'min:6'
        ];
    }
}