<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class AdminUser extends FormRequest
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
        return [
            'name' => 'required',
            'user_role' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->id,
            'password' => 'required|min:8',
        ];
    }

    /**
     * Return validation errors as json response
     *
     * @param Validator $validator
     */
    // protected function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(webResponse(false,400,$validator->getMessageBag()));
    // }
}
