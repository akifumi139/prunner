<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class AuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        $credentials = $this->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return true;
        }
        return false;
    }

    protected function failedAuthorization()
    {
        throw new HttpResponseException(
            redirect()->route('auth.index')->withErrors(['email' => '認証情報が間違っています。'])
        );
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }
}
