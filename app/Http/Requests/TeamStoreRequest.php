<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'foundation_year' => 'required|integer',
            'description' => 'required|string',
        ];
    }
}