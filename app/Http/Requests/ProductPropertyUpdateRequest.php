<?php

namespace App\Http\Requests;

use App\Models\ProductProperty;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\unique;


class ProductPropertyUpdateRequest extends FormRequest
{
    /**
     * @var mixed
     */

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
            'title' => Rule::unique('product_properties')->ignore(ProductProperty::find($id))
        ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'این مشخصه وجود دارد',
        ];
    }
}
