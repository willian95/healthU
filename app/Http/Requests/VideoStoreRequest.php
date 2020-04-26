<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoStoreRequest extends FormRequest
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
            
            "title" => "required",
            "link" => "required",
            "description" => "required",
            "tags" => "required",
            "language" => "required",
            "channelId" => "required|integer"

        ];
    }

    public function messages(){

        return [

            "title.required" => "El titulo es requerido",
            "link.required" => "El link es requerido",
            "description.required" => "Descripción es requerida",
            "tags.required" => "etiquetas son requeridas",
            "language.required" => "Idioma es requerido",
            "channelId.required" => "El canal es requerido",
            "channelId.integer" => "Debe seleccionar un canal válido",  

        ];

    }
}
