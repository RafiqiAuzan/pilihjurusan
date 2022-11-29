<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Propaganistas\LaravelPhone\PhoneNumber;

class LoginRequest extends FormRequest
{
    /**
     * Prepare and parse validation input
     * 
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'phone_email' => (string) PhoneNumber::make($this->phone_email, getCountryCode())
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $phoneRule = getPhoneRule();
        $rule = isEmail($this->phone_email) ? 'email:rfc,dns' : "phone:$phoneRule," . getCountryCode();
        return [
            'phone_email' => "required|$rule",
            'password' => 'min:6'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        $attributes = [
            'phone_email' => 'Email/Whatsapp'
        ];
        if (isEmail($this->phone_email)) {
            $attributes['phone_email'] = 'Email';
        } else if (isPhoneNumber($this->phone_email)) {
            $attributes['phone_email'] = 'Whatsapp';
        }
        return $attributes;
    }
}