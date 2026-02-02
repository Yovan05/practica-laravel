<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:255|',
            'slug' => ['required',
                        'min:5',
                        'max:255',
                        'unique:posts'],
            'category' => 'required',
            'content' => 'required'
        ];
    }

    //sirve para poner mensajes personalizados
    /*public function messages(){
        return [
            'title.required' => 'El :attribute es requerido conchesumadre'
        ];
    }*/

    //sirve para cambiar el nombre de la columna que aparece en el mensaje de error
    public function attributes(){
        return [
            'title' => 'name'
        ];
    }
}
