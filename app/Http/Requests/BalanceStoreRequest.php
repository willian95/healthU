<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BalanceStoreRequest extends FormRequest
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
            "amount" => "required|numeric",
            "hash" => "required"
        ];
    }

    public function messages()
    {
        return [
            "amount.required" => "Cantidad es requerida",
            "amount.numeric" => "Cantidad debe ser un número",
            "hash.required" => "Hash de transacción es requerido"
        ];
    }
}
