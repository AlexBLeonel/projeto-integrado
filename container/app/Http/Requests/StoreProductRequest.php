<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Auth;

class StoreProductRequest extends FormRequest {
    public function authorize() {
        return Auth::check();
    }

    public function rules() {
        return [
            "product"    => "required|max:50",
            "decription" => "required|max:250",
            "price"      => "required"
        ];
    }

    public function messages() {
        return [
            "product.required"     => "Por favor informe o produto.",
            "product.max"          => "O produto deve possuir no máximo 50 caracteres.",
            "description.required" => "Por favor informe a descrição.",
            "description.max"      => "A descrição deve possuir no máximo 255 caracteres.",
            "price.required"       => "Por favor informe o preço."
        ];
    }
}
