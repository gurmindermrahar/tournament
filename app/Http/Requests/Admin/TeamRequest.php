<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TeamRequest extends FormRequest
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
            'title' => 'required',
            'about' => 'required',
            'venue' => 'required',
            'group' => 'required',
            'date' => 'required',
            'wins' => 'required',
            'loses' => 'required',
            'total_games' => 'required',
            'player' => 'required',
            'status' => 'required',
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
