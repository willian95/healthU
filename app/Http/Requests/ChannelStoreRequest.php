<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChannelStoreRequest extends FormRequest
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
            "name" => "required",
            "categoryId" => "required|integer",
            "image" => "required"
        ];
    }

    public function messages(){

        return[
            "name.required" => "Nombre del canal es requerido",
            "categoryId.required" => "Debe seleccionar una categoría",
            "categoryId.integer" => "Debe seleccionar una categoría válida",
            "image.required" => "Imagen es requerida"
        ];

    }

}
