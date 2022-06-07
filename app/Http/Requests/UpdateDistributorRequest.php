<?php

namespace App\Http\Requests;

use App\Models\Distributor;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDistributorRequest extends FormRequest
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
            'email' => ['required'],
            'phone' => ['required'],
            'phone2' => ['nullable'],
            'nationality' => ['required'],
            'state' => ['required'],
            'lga' => ['required'],
            'bname' => ['required'],
            'badd' => ['required'],
            'area' => ['required'],
            'status' => ['required']
        ];
    }
}
