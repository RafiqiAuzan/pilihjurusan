<?php

namespace App\Traits\Forms\Auth;

trait LoginTrait
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules($data = null)
    {
        $phoneRule = getPhoneRule();
        $rule = isEmail($this->phone_email) ? 'email:rfc,dns' : "phone:$phoneRule," . getCountryCode();
        return [
            'phone_email' => "required|$rule",
            'password' => 'required|min:6'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes($data = null)
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
} ?>