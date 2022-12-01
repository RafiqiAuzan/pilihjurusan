<?php

namespace App\Http\Requests\Auth;

use App\Traits\Forms\Auth\LoginTrait;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    use LoginTrait;
}