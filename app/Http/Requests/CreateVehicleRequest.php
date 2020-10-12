<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehicleRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'password' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'forename' => 'required|string|max:20',
            'surname' => 'required|string|max:20',
            'type' => 'required|integer|max:4',
            'maximum_person' => 'required|integer|max:4',
            'can_children' => 'required|in:on',
            'can_animals' => 'required|in:on',
            'localization' => 'required|string|max:255'
        ];
    }
}
