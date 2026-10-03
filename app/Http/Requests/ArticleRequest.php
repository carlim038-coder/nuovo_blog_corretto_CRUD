<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Impostalo su true per permettere l'invio della richiesta
        return true; 
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:255',
            'subtitle' => 'required|min:5|max:255',
            'body' => 'required|min:10',
            'img' => 'nullable|image|max:2048',
        ];
    }
}