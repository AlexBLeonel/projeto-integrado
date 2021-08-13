<?php
namespace App\Http\Requests;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest {
    public function authorize() {
        return Auth::check();
    }

    public function rules() {
        return [
            "name"  => "required|max:100",
            "phone" => "required|max:20",
            "email" => "required|unique:clients,email|max:100",
            "birth" => "required",
            "cpf"   => "required|unique:clients,cpf|max:11"
        ];
    }

    public function messages() {
        return [
            "name.required"  => "Por favor informe o Nome.",
            "name.max"       => "O Nome deve possuir no máximo 100 caracteres.",
            "phone.required" => "Por favor informe o Telefone.",
            "phone.max"      => "O Telefone deve possuir no máximo 20 números.",
            "email.required" => "Por favor informe o E-Mail.",
            "email.unique"   => "O E-Mail informado já está em uso.",
            "email.max"      => "O E-Mail deve possuir no máximo 100 caracteres.",
            "birth.required" => "Por favor informe a Data de Nascimento.",
            "cpf.required"   => "Por favor informe o CPF.",
            "cpf.unique"     => "O CPF informado já está em uso.",
            "cpf.max"        => "O CPF deve possuir no máximo 11 números.",
        ];
    }
}
