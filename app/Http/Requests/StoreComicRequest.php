<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()->role !== "admin") {
            return false; // blocca l'azione e da un errore di autorizzazione
        }

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
            "title" => "required|min:10|max:255",
            "description" => "required|string",
            "price" => "required|decimal:2",
            "thumb" => "required|string|url",
            "series" => "required|string",
            "sale_date" => "required|date|string",
            "type" => "required|string",
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" =>  "Il titolo deve avere almeno :min caratteri",
            "title.max" =>  "Il titolo deve avere massimo :max caratteri",
            "description.required" => "Il contenuto è obbligatorio",
            "price.required" => "Il prezzo è obbligatorio",
            "thumb.required" => "La copertina è obbligatoria",
            "series.required" => "Il nome della serie è obbligatorio",
            "sale_date.required" => "La data d'uscita è obbligatorio",
            "type.required" => "Il tipo è obbligatorio",
        ];
    }
}
