<?php

namespace App\Http\Requests;

use App\Models\Brands;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BrandUpdateRequest extends FormRequest
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
        $id = request()->id;
        return [
            'file' => ['max:1000', 'mimes:jpeg,jpg,png'],
            'name' => Rule::unique('brands')->ignore(Brands::find($id)),
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
