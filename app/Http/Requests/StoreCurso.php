<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ];
    }

    public function attributes(){ //SIRVE PARA MODIFICAR EL NOMBRE DEL ATRIBUTO ORIGINAL
        return [
            'name' => 'nombre del curso'
        ];
    }

    public function messages(){   //SIRVE PARA MODIFICAR EL MENSAJE COMPLETO
        return [
            'descripcion.required' => 'Debes ingresar una descripcion del curso'
        ];
    }
}
