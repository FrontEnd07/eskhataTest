<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "OrderIdForm" => "required|integer|max:2147483647",
            'NameForm' => 'required|integer|max:2147483647',
            'QuantityForm' => 'required|numeric',
            'UnitForm' => 'required|integer|max:2147483647',
        ];
    }
    /**
     * Определение сообщений об ошибках
     *
     * @return array
     */
    public function messages()
    {
        return [
            'OrderIdForm.required' => 'OrderId обязательно для заполнения',
            'NameForm.required' => 'Name обязательно для заполнения',
            'QuantityForm.required' => 'Quantity обязательно для заполнения',
            'UnitForm.required' => 'Unit с таким обязательно для заполнения',
        ];
    }
}
