<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WriteRequest extends Request
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
            // 'title' => 'required',
            'writings' => 'required' 
        ];
    }

    public function messages()
{
    return [
        'writings.required' => "You don't have writer's block already? Enter some text above.",
    ];
}
}
