<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        # pasarlo a true para que no haya problemas
        # aqui se hacen las validaciones de roles
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
            'task_name' => ['required', 'string', 'max:255'],
            'task_description' => 'required|string',
            'task_is_done' => 'required|boolean',
            'task_observation' => ['required', 'string'],
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'task_name.required' => 'El nombre de la tarea es requerido',
            'task_name.string' => 'El nombre de la tarea debe ser un texto',
            'task_name.max' => 'El nombre de la tarea no debe exceder los 255 caracteres',
            'task_description.required' => 'La descripción de la tarea es requerida',
            'task_description.string' => 'La descripción de la tarea debe ser un texto',
            'task_is_done.required' => 'El estado de la tarea es requerido',
            'task_is_done.boolean' => 'El estado de la tarea debe ser un booleano',
            'task_observation.required' => 'La observación de la tarea es requerida',
            'task_observation.string' => 'La observación de la tarea debe ser un texto',
        ];
    }
}
