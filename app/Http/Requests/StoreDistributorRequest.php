<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDistributorRequest extends FormRequest
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
            'title' => ['required'],
            'fname' => ['required'],
            'lname' => ['required'],
            'email' => ['required', 'unique:distributors'],
            'phone' => ['required'],
            'phone2' => ['nullable'],
            'nationality' => ['required'],
            'state' => ['required'],
            'lga' => ['required'],
            'bname' => ['required','unique:distributors'],
            'badd' => ['required'],
            'area' => ['required'],
            'cac' => ['required'],
            'tin' => ['required']
        ];
    }
}
