<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSuperheroRequest extends FormRequest
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
        $id = $this->route('superhero')->id;
        return [
            'name' => 'required|min:3|max:100',
            'superhero_name' => 'required|min:2|max:100|unique:superheroes,superhero_name,' . $id,
            'superpower' => 'required|min:5|max:255',
            'weakness' => 'required|min:3|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ];
    }

    public function messages(): array
    {
        return (new StoreSuperheroRequest())->messages(); // usa as mesma mensagem do store
    }
}
