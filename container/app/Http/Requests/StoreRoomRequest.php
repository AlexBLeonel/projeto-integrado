<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Auth;

class StoreRoomRequest extends FormRequest {
    public function authorize() {
        return Auth::check();
    }

    public function rules() {
        return [
            "description" => "required|max:250", 
            "number"      => "required|integer|max:11"
        ];
    }

    public function messages() {
        return [
            "description.required" => "Por favor informe a Descrição.",
            "description.max"      => "A Descrição deve possuir no máximo 250 caracteres.",
            "number.required"      => "Por favor informe o Número do Quarto.",
            "number.integer"       => "O Número do Quarto deve possuir apenas números.",
            "number.max"           => "O Número do Quarto deve possuir no máximo 11 números.",
        ];
    }
}
