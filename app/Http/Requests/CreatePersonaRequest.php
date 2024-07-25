<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    //verifica el usuario autorizado
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
            'cPerApellido' => 'required|string|max:50',
            'cPerNombre' => 'required|string|max:50',
            'cPerDireccion' => 'required|string|max:100',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer|min:0',
            'cPerSexo' => 'nullable|string|max:50',
            'nPerSueldo' => 'required|numeric|min:0',
            'cPerRnd' => 'required|string|max:50',
            'nPerEstado' => 'required|string|size:1'

        ];
    }
    // las reglas  de validación
    public function messages(): array
    {
        return [
            'cPerApellido.required' => 'El campo apellido es obligatorio.',
            'cPerNombre.required' => 'El campo nombre es necesario.',
            'cPerDireccion.required' => 'El campo dirección es necesario.',
            'dPerFecNac.required' => 'Se necesita la fecha de nacimiento.',
            'dPerFecNac.date' => 'Debe ser una fecha de nacimiento válida.',
            'nPerEdad.required' => 'Es necesario la edad.',
            'nPerEdad.integer' => 'Debe ser la edad un número entero.',
            'cPerSexo.string' => 'El campo sexo debe ser una cadena de texto.',
            'nPerSueldo.required' => 'Se necesita el sueldo.',
            'nPerSueldo.numeric' => 'Debe ser un número el sueldo.',
            'cPerRnd.required' => 'El campo RND es obligatorio.',
            'nPerEstado.required' => 'El estado es obligatorio.',
            'nPerEstado.string' => 'Es requisito una cadena de texto en el estado.',
            'nPerEstado.size' => 'Se requiere un solo  carácter el estado.'
        ];
    }

}
