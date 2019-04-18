<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
		if (auth()->user()->role->name == 'admin') {
			return TRUE;
		}else{
			return FALSE;
		}
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'name' => 'required', 'string', 'max:255',
			'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
			'age' => 'required',
			'role_id' => 'required',
			'password' => 'required', 'string', 'min:8', 'confirmed',
        ];
    }
}
