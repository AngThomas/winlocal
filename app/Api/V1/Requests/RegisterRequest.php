<?php

namespace App\Api\V1\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:10',
            'email' => 'required|email',
            'password' => 'required|min:5|max:20',
            'password_confirmation' => 'required|min:5|max:20|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Member name is required',
            'email' => 'Member email is required',
            'password' => 'Password is required',
            'password_confirmation.required' => 'You have to confirm password',
        ];
    }
}
