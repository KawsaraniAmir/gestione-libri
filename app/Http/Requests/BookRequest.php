<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:800',
            'pages' => 'nullable|integer|min:1',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo del libro è obbligatorio.',
            'description.max' => 'La descrizione non può superare gli 800 caratteri.',
            'pages.integer' => 'Il numero di pagine deve essere un valore numerico.',
            'pages.min' => 'Il numero di pagine deve essere almeno 1.',
            'author_id.required' => 'Selezionare un autore valido.',
            'author_id.exists' => 'L\'autore selezionato non esiste.',
            'category_id.required' => 'Selezionare una categoria valida.',
            'category_id.exists' => 'La categoria selezionata non esiste.',
        ];
    }
}
