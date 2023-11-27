<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' =>'required|min:2|max:50',
            'description' =>'required',
            'thumb' =>'required|min:3|max:255',
            'price' =>'required|max:10',
            'series' =>'required|min:2|max:50',
            'type' =>'required|min:2|max:30',
            'sale_date' =>'required|date',

        ];
    }

    public function messages() {
        return  [
            'title.required' => 'Il nome del fumetto è obbligatorio',
            'title.min' => 'Il nome del fumetto deve avere almeno :min caratteri',
            'title.max' => 'Il nome del fumetto può avere massimo :max caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'thumb.required' => 'L\'immagine è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.max' => 'Il prezzo deve essere massimo :max caratteri',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'Il nome del fumetto deve avere almeno :min caratteri',
            'series.max' => 'Il nome del fumetto può avere massimo :max caratteri',
            'type.required' => 'Il tipo di fumetto è obbligatorio',
            'type.min' => 'Il tipo di fumetto deve avere almeno :min caratteri',
            'type.max' => 'Il tipo di fumetto può avere massimo :max caratteri',
            'sale_date.required' => 'La data è obbligatoria',
        ];
    }
}
