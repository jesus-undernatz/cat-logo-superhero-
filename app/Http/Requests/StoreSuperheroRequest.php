<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSuperheroRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100',
            'superhero_name' => 'required|min:2|max:100|unique:superheroes,superhero_name',
            'superpower' => 'required|min:5|max:255',
            'weakness' => 'required|min:3|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048', // obrigatório no cadastro, máximo 2MB
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'min' => 'O campo :attribute deve ter pelo menos :min caracteres.',
            'max' => 'O campo :attribute não pode passar de :max caracteres.',
            'unique' => 'Esse nome de super-herói já está cadastrado.',
            'image' => 'O arquivo enviado deve ser uma imagem.',
            'mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg ou webp.',
        ];
    }
}
