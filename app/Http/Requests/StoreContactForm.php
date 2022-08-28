<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    //authorize 認証しているかどうか判定する
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //バリデーションルール記載
            'your_name' => 'required|string|max:20',
            'tel' => 'required|string|max:11',
            'date' => 'required',
            'time' => 'required',
            'ages' =>'required',
            'contacts' =>'string|nullable',
        ];
    }
}
