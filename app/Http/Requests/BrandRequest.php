<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'file' => ['required', 'max:1000', 'mimes:jpeg,jpg,png'],
            'name' => ['unique:brands'],
        ];
    }

    public function messages()
    {
        return [
            'file.max' => 'حجم عکس بیشتر از 1 مگابایت نمیتواند باشد',
            'name.unique' => 'این برند قبلا ایجاد شده است',
            'file.mimes' => 'فرمت عکس آپلود شده فقط jpeg,jpg,png میتواند باشد',
        ];
    }
}
