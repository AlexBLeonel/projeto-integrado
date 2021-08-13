<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Auth;

class StoreBookingRequest extends FormRequest {
    public function authorize() {
        return Auth::check();
    }

    public function rules() {
        return [
            "client_id" => "required",
            "room_id"   => "required",
            "checkin"   => "required",
            "checkout"  => "required"
        ];
    }

    public function messages() {
        return [
            "client_id.required" => "Por favor informe o Cliente.",
            "room_id.required"   => "Por favor informe o Quarto.",
            "checkin.required"   => "Por favor informe a data de Check-in.",
            "checkout.required"  => "Por favor informe a data prevista de Check-out.",
        ];
    }
}
