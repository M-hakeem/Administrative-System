<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
            'fname' => ['required'],
            'lname' => ['required'],
            'email' => ['required','unique:staff'],
            'phone' => ['required'],
            'gender' => ['required'],
            'department' => ['required'],
            'position' => ['required'],
            'category' => ['required']
        ];
    }
}
