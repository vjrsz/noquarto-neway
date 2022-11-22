<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $this->flash();
        $id = Auth::id();

        return [
            'name' => 'required|string|max:255|min:3',
            'email' => [
                'required',
                'email',
                "unique:users,email,{$id},id"
            ],
            "password" => [
                'nullable',
                'min:6',
                'max:15',
            ],
            "photo" => [
                'nullable',
                'image',
                'max:2048',
            ],
        ];
    }
}
