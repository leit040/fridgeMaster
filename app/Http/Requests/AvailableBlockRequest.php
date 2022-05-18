<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AvailableBlockRequest extends FormRequest
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
            'startAt'=>['required','date'],
            'endAt'=>['required','date'],
            'count'=>['required','number'],
            'frostLevel'=>['required',Rule::in(['High','Medium','Low'])]
               ];
    }
}
